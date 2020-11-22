#! / usr / bin / env bash

{ # esto asegura que se descargue todo el script #

nvm_has () {
  escriba  " $ 1 "  > / dev / null 2> & 1
}

nvm_default_install_dir () {
  [ -z  " $ {XDG_CONFIG_HOME-} " ] &&  printf % s " $ {HOME} /.nvm "  ||  printf % s " $ {XDG_CONFIG_HOME} / nvm "
}

nvm_install_dir () {
  si [ -n  " $ NVM_DIR " ] ;  luego
    printf % s " $ {NVM_DIR} "
  más
    nvm_default_install_dir
  fi
}

nvm_latest_version () {
  echo  " v0.36.0 "
}

nvm_profile_is_bash_or_zsh () {
  TEST_PROFILE local
  TEST_PROFILE = " $ {1-} "
  caso  " $ {TEST_PROFILE-} "  en
    * " /.bashrc " | * " /.bash_profile " | * " /.zshrc " )
      regreso
    ;;
    * )
      volver 1
    ;;
  esac
}

#
# Envía la ubicación a NVM dependiendo de:
# * La disponibilidad de $ NVM_SOURCE
# * El método utilizado ("script" o "git" en el script, por defecto es "git")
# NVM_SOURCE siempre tiene prioridad a menos que el método sea "script-nvm-exec"
#
nvm_source () {
  NVM_METHOD local
  NVM_METHOD = " $ 1 "
  NVM_SOURCE_URL local
  NVM_SOURCE_URL = " $ NVM_SOURCE "
  si [ " _ $ NVM_METHOD "  =  " _script-nvm-exec " ] ;  luego
    NVM_SOURCE_URL = " https://raw.githubusercontent.com/nvm-sh/nvm/ $ ( nvm_latest_version ) / nvm-exec "
  elif [ " _ $ NVM_METHOD "  =  " _script-nvm-bash-completacion " ] ;  luego
    NVM_SOURCE_URL = " https://raw.githubusercontent.com/nvm-sh/nvm/ $ ( nvm_latest_version ) / bash_completion "
  elif [ -z  " $ NVM_SOURCE_URL " ] ;  luego
    si [ " _ $ NVM_METHOD "  =  " _script " ] ;  luego
      NVM_SOURCE_URL = " https://raw.githubusercontent.com/nvm-sh/nvm/ $ ( nvm_latest_version ) /nvm.sh "
    elif [ " _ $ NVM_METHOD "  =  " _git " ] || [ -z  " $ NVM_METHOD " ] ;  luego
      NVM_SOURCE_URL = " https://github.com/nvm-sh/nvm.git "
    más
      echo  > & 2  " Valor inesperado \" $ NVM_METHOD \ " para \ $ NVM_METHOD "
      volver 1
    fi
  fi
  echo  " $ NVM_SOURCE_URL "
}

#
# Versión de Node.js para instalar
#
nvm_node_version () {
  echo  " $ NODE_VERSION "
}

nvm_download () {
  si nvm_has " curl " ;  luego
    curl --compressed -q " $ @ "
  elif nvm_has " wget " ;  luego
    # Emular curl con wget
    ARGS = $ ( echo " $ * "  |  comando sed -e ' s / - barra de progreso / - progreso = barra / ' \
                            -e ' s / -L // ' \
                            -e ' s / - comprimido // ' \
                            -e ' s / -I / - respuesta-servidor / ' \
                            -e ' s / -s / -q / ' \
                            -e ' s / -o / -O / ' \
                            -e ' s / -C - / -c / ' )
    # shellcheck disable = SC2086
    eval wget $ ARGS
  fi
}

install_nvm_from_git () {
  INSTALL_DIR local
  INSTALL_DIR = " $ ( nvm_install_dir ) "

  if [ -d  " $ INSTALL_DIR /.git " ] ;  luego
    echo  " => nvm ya está instalado en $ INSTALL_DIR , intentando actualizar usando git "
    comando  printf  ' \ r => '
    comando git --git-dir = " $ INSTALL_DIR " /.git --work-tree = " $ INSTALL_DIR " buscar etiqueta de origen " $ ( nvm_latest_version ) " --depth = 1 2> / dev / null || {
      echo  > & 2  " No se pudo actualizar nvm, ejecute 'git fetch' en $ INSTALL_DIR usted mismo. "
      salida 1
    }
  más
    # Clonación en $ INSTALL_DIR
    echo  " => Descargando nvm de git a ' $ INSTALL_DIR ' "
    comando  printf  ' \ r => '
    mkdir -p " $ {INSTALL_DIR} "
    if [ " $ ( ls -A " $ {INSTALL_DIR} " ) " ] ;  luego
      comando git init " $ {INSTALL_DIR} "  || {
        echo  > & 2  ' No se pudo inicializar el repositorio nvm. ¡Informe esto! '
        salida 2
      }
      comando git --git-dir = " $ {INSTALL_DIR} /.git " agregar origen remoto " $ ( nvm_source ) "  2> / dev / null \
        ||  comando git --git-dir = " $ {INSTALL_DIR} /.git " origen de la URL del conjunto remoto " $ ( nvm_source ) "  || {
        echo  > & 2  ' No se pudo agregar el "origen" remoto (o establecer la URL). ¡Informe esto! '
        salida 2
      }
      comando git --git-dir = " $ {INSTALL_DIR} /.git " buscar etiqueta de origen " $ ( nvm_latest_version ) " --depth = 1 || {
        echo  > & 2  ' No se pudo recuperar el origen con las etiquetas. ¡Informe esto! '
        salida 2
      }
    más
      comando git -c advice.detachedHead = falso clon " $ ( nvm_source ) " -b " $ ( nvm_latest_version ) " --depth = 1 " $ {INSTALL_DIR} "  || {
        echo  > & 2  ' No se pudo clonar el repositorio nvm. ¡Informe esto! '
        salida 2
      }
    fi
  fi
  comando git -c advice.detachedHead = false --git-dir = " $ INSTALL_DIR " /.git --work-tree = " $ INSTALL_DIR " checkout -f --quiet " $ ( nvm_latest_version ) "
  if [ -n  " $ ( comando git --git-dir = " $ INSTALL_DIR " /.git --work-tree = " $ INSTALL_DIR " show-ref refs / heads / master ) " ] ;  luego
    if  comando git --git-dir = " $ INSTALL_DIR " /.git --work-tree = " $ INSTALL_DIR " branch --quiet 2> / dev / null ;  luego
      comando git --git-dir = " $ INSTALL_DIR " /.git --work-tree = " $ INSTALL_DIR " branch --quiet -D master > / dev / null 2> & 1
    más
      echo  > & 2  " Tu versión de git no está actualizada. ¡Actualízala! "
      comando git --git-dir = " $ INSTALL_DIR " /.git --work-tree = " $ INSTALL_DIR " branch -D master > / dev / null 2> & 1
    fi
  fi

  echo  " => Comprimir y limpiar el repositorio de git "
  si  !  comando git --git-dir = " $ INSTALL_DIR " /.git --work-tree = " $ INSTALL_DIR " reflog expire --expire = ahora --todos ;  luego
    echo  > & 2  " Tu versión de git no está actualizada. ¡Actualízala! "
  fi
  si  !  comando git --git-dir = " $ INSTALL_DIR " /.git --work-tree = " $ INSTALL_DIR " gc --auto --aggressive --prune = ahora ;  luego
    echo  > & 2  " Tu versión de git no está actualizada. ¡Actualízala! "
  fi
  regreso
}

#
# Instalar automáticamente Node.js
#
nvm_install_node () {
  local NODE_VERSION_LOCAL
  NODE_VERSION_LOCAL = " $ ( nvm_node_version ) "

  si [ -z  " $ NODE_VERSION_LOCAL " ] ;  luego
    volver 0
  fi

  echo  " => Instalando Node.js versión $ NODE_VERSION_LOCAL "
  nvm instalar " $ NODE_VERSION_LOCAL "
  local CURRENT_NVM_NODE

  CURRENT_NVM_NODE = " $ ( nvm_version actual ) "
  if [ " $ ( nvm_version " $ NODE_VERSION_LOCAL " ) "  ==  " $ CURRENT_NVM_NODE " ] ;  luego
    echo  " => La versión de Node.js $ NODE_VERSION_LOCAL se ha instalado correctamente "
  más
    echo  > & 2  " No se pudo instalar Node.js $ NODE_VERSION_LOCAL "
  fi
}

install_nvm_as_script () {
  INSTALL_DIR local
  INSTALL_DIR = " $ ( nvm_install_dir ) "
  NVM_SOURCE_LOCAL local
  NVM_SOURCE_LOCAL = " $ ( secuencia de comandos nvm_source ) "
  NVM_EXEC_SOURCE local
  NVM_EXEC_SOURCE = " $ ( nvm_source script-nvm-exec ) "
  NVM_BASH_COMPLETION_SOURCE local
  NVM_BASH_COMPLETION_SOURCE = " $ ( nvm_source script-nvm-bash-complete ) "

  # Descargando a $ INSTALL_DIR
  mkdir -p " $ INSTALL_DIR "
  if [ -f  " $ INSTALL_DIR /nvm.sh " ] ;  luego
    echo  " => nvm ya está instalado en $ INSTALL_DIR , intentando actualizar el script "
  más
    echo  " => Descargando nvm como script en ' $ INSTALL_DIR ' "
  fi
  nvm_download -s " $ NVM_SOURCE_LOCAL " -o " $ INSTALL_DIR /nvm.sh "  || {
    echo  > & 2  " Error al descargar ' $ NVM_SOURCE_LOCAL ' "
    volver 1
  } Y
  nvm_download -s " $ NVM_EXEC_SOURCE " -o " $ INSTALL_DIR / nvm-exec "  || {
    echo  > & 2  " Error al descargar ' $ NVM_EXEC_SOURCE ' "
    volver 2
  } Y
  nvm_download -s " $ NVM_BASH_COMPLETION_SOURCE " -o " $ INSTALL_DIR / bash_completion "  || {
    echo  > & 2  " Error al descargar ' $ NVM_BASH_COMPLETION_SOURCE ' "
    volver 2
  } Y
  para el  trabajo  en  $ ( puestos de trabajo -p |  comando de clase )
  hacer
    espera  " $ trabajo "  ||  return  $?
  hecho
  chmod a + x " $ INSTALL_DIR / nvm-exec "  || {
    echo  > & 2  " No se pudo marcar ' $ INSTALL_DIR / nvm-exec' como ejecutable "
    volver 3
  }
}

nvm_try_profile () {
  si [ -z  " $ {1-} " ] || [ !  -f  " $ {1} " ] ;  luego
    volver 1
  fi
  echo  " $ {1} "
}

#
# Detectar archivo de perfil si no se especifica como variable de entorno
# (por ejemplo: PROFILE = ~ / .myprofile)
# Se garantiza que la ruta repetida es un archivo existente
# De lo contrario, se devuelve una cadena vacía
#
nvm_detect_profile () {
  si [ " $ {PERFIL-} "  =  ' / dev / null ' ] ;  luego
    # el usuario ha solicitado específicamente NO que nvm toque su perfil
    regreso
  fi

  if [ -n  " $ {PERFIL} " ] && [ -f  " $ {PERFIL} " ] ;  luego
    echo  " $ {PERFIL} "
    regreso
  fi

  DETECTED_PROFILE local
  DETECTED_PROFILE = ' '

  si [ -n  " $ {BASH_VERSION-} " ] ;  luego
    si [ -f  " $ INICIO /.bashrc " ] ;  luego
      DETECTED_PROFILE = " $ INICIO /.bashrc "
    elif [ -f  " $ HOME /.bash_profile " ] ;  luego
      DETECTED_PROFILE = " $ HOME /.bash_profile "
    fi
  elif [ -n  " $ {ZSH_VERSION-} " ] ;  luego
    DETECTED_PROFILE = " $ INICIO /.zshrc "
  fi

  si [ -z  " $ DETECTED_PROFILE " ] ;  luego
    para  CADA PERFIL  en  " .profile "  " .bashrc "  " .bash_profile "  " .zshrc "
    hacer
      if DETECTED_PROFILE = " $ ( nvm_try_profile " $ {HOME} / $ {EACH_PROFILE} " ) " ;  luego
        rotura
      fi
    hecho
  fi

  if [ -n  " $ DETECTED_PROFILE " ] ;  luego
    echo  " $ DETECTED_PROFILE "
  fi
}

#
# Compruebe si el usuario tiene módulos npm instalados globalmente en su sistema
# Node, y avíseles si es así.
#
nvm_check_global_modules () {
  comando -v npm > / dev / null 2> & 1  ||  volver 0

  local NPM_VERSION
  NPM_VERSION = " $ ( npm --version ) "
  NPM_VERSION = " $ {NPM_VERSION : - -1} "
  [ " $ {NPM_VERSION %% [! -0-9] * } "  -gt 0] ||  volver 0

  NPM_GLOBAL_MODULES locales
  NPM_GLOBAL_MODULES = " $ (
    npm list -g --depth = 0 |
    comando sed -e ' / npm @ / d ' -e ' / (vacío) $ / d '
  ) "

  MODULE_COUNT local
  MODULE_COUNT = " $ (
    comando  printf % s \\ n " $ NPM_GLOBAL_MODULES "  |
    comando sed -ne ' 1! p '  |                      # Elimina la primera línea
    wc -l |  comando tr -d '  '                    # Contar entradas
  ) "

  si [ " $ {MODULE_COUNT} "  ! =  ' 0 ' ] ;  luego
    # shellcheck disable = SC2016
    echo  ' => Actualmente tiene módulos instalados globalmente con `npm`. Estos no '
    # shellcheck disable = SC2016
    echo  ' => ya estará vinculado a la versión activa de Node cuando instale un nuevo nodo '
    # shellcheck disable = SC2016
    echo  ' => con `nvm`; y pueden (dependiendo de cómo construya su `$ PATH`) '
    # shellcheck disable = SC2016
    echo  ' => anula los binarios de los módulos instalados con `nvm`: '
    eco

    comando  printf % s \\ n " $ NPM_GLOBAL_MODULES "
    echo  ' => Si desea desinstalarlos en un momento posterior (o reinstalarlos en su '
    # shellcheck disable = SC2016
    echo  ' => `nvm` Nodes), puede eliminarlos del Nodo del sistema de la siguiente manera: '
    eco
    echo  '      $ nvm use system '
    echo  '      $ npm desinstalar -g a_module '
    eco
  fi
}

nvm_do_install () {
  si [ -n  " $ {NVM_DIR-} " ] &&  ! [ -d  " $ {NVM_DIR} " ] ;  luego
    si [ -e  " $ {NVM_DIR} " ] ;  luego
      echo  > & 2  " Archivo \" $ {NVM_DIR} \ " tiene el mismo nombre que el directorio de instalación " .
      salida 1
    fi

    if [ " $ {NVM_DIR} "  =  " $ ( nvm_default_install_dir ) " ] ;  luego
      mkdir " $ {NVM_DIR} "
    más
      echo  > & 2  " Tiene \ $ NVM_DIR configurado en \" $ {NVM_DIR} \ " , pero ese directorio no existe. Verifique sus archivos de perfil y su entorno. "
      salida 1
    fi
  fi
  if [ -z  " $ {METHOD} " ] ;  luego
    # Método de instalación de detección automática
    si nvm_has git ;  luego
      install_nvm_from_git
    elif nvm_has nvm_download ;  luego
      install_nvm_as_script
    más
      echo  > & 2  ' Necesitas git, curl o wget para instalar nvm '
      salida 1
    fi
  elif [ " $ {METHOD} "  =  ' git ' ] ;  luego
    si  ! nvm_has git ;  luego
      echo  > & 2  " Necesitas git para instalar nvm "
      salida 1
    fi
    install_nvm_from_git
  elif [ " $ {METHOD} "  =  ' script ' ] ;  luego
    si  ! nvm_has nvm_download ;  luego
      echo  > & 2  " Necesitas curl o wget para instalar nvm "
      salida 1
    fi
    install_nvm_as_script
  más
    echo  > & 2  " La variable de entorno \ $ METHOD se establece en \" $ {METHOD} \ " , que no se reconoce como un método de instalación válido. "
    salida 1
  fi

  eco

  NVM_PROFILE local
  NVM_PROFILE = " $ ( nvm_detect_profile ) "
  PROFILE_INSTALL_DIR local
  PROFILE_INSTALL_DIR = " $ ( nvm_install_dir |  comando sed " s: ^ $ HOME : \ $ HOME: " ) "

  SOURCE_STR = " \\ nexport NVM_DIR = \" $ {PROFILE_INSTALL_DIR} \ "\\ n [-s \" \ $ NVM_DIR / nvm.sh \ " ] && \\ . \" \ $ NVM_DIR / nvm.sh \ "   # Esto carga nvm \\ n "

  # shellcheck disable = SC2016
  COMPLETION_STR = ' [-s "$ NVM_DIR / bash_completion"] && \. "$ NVM_DIR / bash_completion" # Esto carga nvm bash_completion \ n '
  BASH_OR_ZSH = falso

  si [ -z  " $ {NVM_PROFILE-} " ] ;  luego
    TRIED_PROFILE local
    si [ -n  " $ {PERFIL} " ] ;  luego
      TRIED_PROFILE = " $ {NVM_PROFILE} (como se define en \ $ PROFILE), "
    fi
    echo  " => Perfil no encontrado. Intenté $ {TRIED_PROFILE-} ~ / .bashrc, ~ / .bash_profile, ~ / .zshrc y ~ / .profile. "
    echo  " => Crea uno de ellos y vuelve a ejecutar este script "
    echo  "    O "
    echo  " => Añade las siguientes líneas al archivo correcto tú mismo: "
    comando  printf  " $ {SOURCE_STR} "
    eco
  más
    if nvm_profile_is_bash_or_zsh " $ {NVM_PROFILE-} " ;  luego
      BASH_OR_ZSH = verdadero
    fi
    si  !  comando grep -qc ' /nvm.sh '  " $ NVM_PROFILE " ;  luego
      echo  " => Añadiendo la cadena fuente nvm a $ NVM_PROFILE "
      comando  printf  " $ {SOURCE_STR} "  >>  " $ NVM_PROFILE "
    más
      echo  " => cadena fuente nvm ya en $ {NVM_PROFILE} "
    fi
    # shellcheck disable = SC2016
    si  $ {BASH_OR_ZSH}  &&  !  comando grep -qc ' $ NVM_DIR / bash_completion '  " $ NVM_PROFILE " ;  luego
      echo  " => Añadiendo cadena de origen bash_completion a $ NVM_PROFILE "
      comando  printf  " $ COMPLETION_STR "  >>  " $ NVM_PROFILE "
    más
      echo  " => cadena fuente bash_completion ya en $ {NVM_PROFILE} "
    fi
  fi
  si  $ {BASH_OR_ZSH}  && [ -z  " $ {NVM_PROFILE-} " ] ;  luego
    echo  " => Por favor, agregue también las siguientes líneas al shell si está usando bash / zsh: "
    comando  printf  " $ {COMPLETION_STR} "
  fi

  # Fuente nvm
  # shellcheck source = / dev / null
  \.  " $ ( nvm_install_dir ) /nvm.sh "

  nvm_check_global_modules

  nvm_install_node

  nvm_reset

  echo  " => Cierra y vuelve a abrir tu terminal para comenzar a usar nvm o ejecuta lo siguiente para usarlo ahora: "
  comando  printf  " $ {SOURCE_STR} "
  si  $ {BASH_OR_ZSH}  ;  luego
    comando  printf  " $ {COMPLETION_STR} "
  fi
}

#
# Desinstala las distintas funciones definidas
# durante la ejecución del script de instalación
#
nvm_reset () {
  unset -f nvm_has nvm_install_dir nvm_latest_version nvm_profile_is_bash_or_zsh \
    nvm_source nvm_node_version nvm_download install_nvm_from_git nvm_install_node \
    install_nvm_as_script nvm_try_profile nvm_detect_profile nvm_check_global_modules \
    nvm_do_install nvm_reset nvm_default_install_dir
}

[ " _ $ NVM_ENV "  =  " _testing " ] || nvm_do_install

} # esto asegura que se descargue todo el script #