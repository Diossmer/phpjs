// 20201026115058
// https://api.github.com/users/diossmervillamizar

let json = `{
    "login": "DiossmerVillamizar",
    "id": 32318640,
    "node_id": "MDQ6VXNlcjMyMzE4NjQw",
    "avatar_url": "https://avatars0.githubusercontent.com/u/32318640?v=4",
    "gravatar_id": "",
    "url": "https://api.github.com/users/DiossmerVillamizar",
    "html_url": "https://github.com/DiossmerVillamizar",
    "followers_url": "https://api.github.com/users/DiossmerVillamizar/followers",
    "following_url": "https://api.github.com/users/DiossmerVillamizar/following{/other_user}",
    "gists_url": "https://api.github.com/users/DiossmerVillamizar/gists{/gist_id}",
    "starred_url": "https://api.github.com/users/DiossmerVillamizar/starred{/owner}{/repo}",
    "subscriptions_url": "https://api.github.com/users/DiossmerVillamizar/subscriptions",
    "organizations_url": "https://api.github.com/users/DiossmerVillamizar/orgs",
    "repos_url": "https://api.github.com/users/DiossmerVillamizar/repos",
    "events_url": "https://api.github.com/users/DiossmerVillamizar/events{/privacy}",
    "received_events_url": "https://api.github.com/users/DiossmerVillamizar/received_events",
    "type": "User",
    "site_admin": false,
    "name": null,
    "company": null,
    "blog": "",
    "location": null,
    "email": null,
    "hireable": null,
    "bio": null,
    "twitter_username": null,
    "public_repos": 4,
    "public_gists": 0,
    "followers": 2,
    "following": 6,
    "created_at": "2017-09-27T03:20:14Z",
    "updated_at": "2020-09-20T18:03:42Z"
}`
console.log(json)
document.querySelector(".menu li a").innerHTML=json +`<p style="background-color:#f40;color:#ff0">https://jonmircha.com/ajax</p>`