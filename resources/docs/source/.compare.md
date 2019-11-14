---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_a1392e4819b53c18330c39c0a3e350f3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/movie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/movie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "title": "Joker1",
            "description": "In Gotham City, mentally-troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: \"The Joker\".",
            "imdb": "8.0",
            "image": "images\/4WyVCe8FipHZMCaLXe4hks8Z4RALoUQ3sy2LSFW8.png",
            "year": 2019,
            "releaseDate": "2019-11-07",
            "revisted_at": "2019-11-01 00:00:00",
            "type_id": 1,
            "category_id": 4,
            "language_id": 1,
            "country_id": 4,
            "diretor_id": 1,
            "star1_id": 2,
            "star2_id": 3,
            "star3_id": 4,
            "author_id": 5,
            "created_at": "2019-11-07 03:10:59",
            "updated_at": "2019-11-14 23:20:44",
            "deleted_at": null
        },
        {
            "id": 2,
            "title": "IT",
            "description": "In the summer of 1989, a group of bullied kids band together to destroy a shape-shifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.",
            "imdb": "7.3",
            "image": "images\/CBO3rknJSN7SKzh0Cl3mwjB8e1rDUA5Mxz01JICF.png",
            "year": 2017,
            "releaseDate": "2019-11-07",
            "revisted_at": "2019-11-01 00:00:00",
            "type_id": 1,
            "category_id": 11,
            "language_id": 1,
            "country_id": 4,
            "diretor_id": 5,
            "star1_id": 6,
            "star2_id": 7,
            "star3_id": 8,
            "author_id": 8,
            "created_at": "2019-11-07 03:10:59",
            "updated_at": "2019-11-07 03:10:59",
            "deleted_at": null
        },
        {
            "id": 3,
            "title": "Deadpool",
            "description": "A wisecracking mercenary gets experimented on and becomes immortal but ugly, and sets out to track down the man who ruined his looks.",
            "imdb": "8.0",
            "image": "images\/CBO3rknJSN7SKzh0Cl3mwjB8e1rDUA5Mxz01JICF.png",
            "year": 2016,
            "releaseDate": "2016-02-11",
            "revisted_at": "2019-10-01 00:00:00",
            "type_id": 1,
            "category_id": 1,
            "language_id": 1,
            "country_id": 4,
            "diretor_id": 5,
            "star1_id": 9,
            "star2_id": 7,
            "star3_id": 8,
            "author_id": 19,
            "created_at": "2019-11-08 02:01:06",
            "updated_at": "2019-11-08 02:16:38",
            "deleted_at": null
        },
        {
            "id": 4,
            "title": "novo",
            "description": "fnjkaakgnak",
            "imdb": "1.0",
            "image": "images\/Pw2L21LQJVRoS6q4euyq3NzVm4r2qAcVtZNqutxD.jpeg",
            "year": 2019,
            "releaseDate": "2019-10-11",
            "revisted_at": "2019-11-13 00:00:00",
            "type_id": 2,
            "category_id": 4,
            "language_id": 1,
            "country_id": 2,
            "diretor_id": 1,
            "star1_id": 2,
            "star2_id": 3,
            "star3_id": 4,
            "author_id": 12,
            "created_at": "2019-11-08 03:14:50",
            "updated_at": "2019-11-14 00:24:40",
            "deleted_at": null
        },
        {
            "id": 5,
            "title": "AHS",
            "description": "este é um texto fantastico",
            "imdb": "8.0",
            "image": "images\/CBO3rknJSN7SKzh0Cl3mwjB8e1rDUA5Mxz01JICF.png",
            "year": 2018,
            "releaseDate": "2018-10-05",
            "revisted_at": "2019-11-01 00:00:00",
            "type_id": 2,
            "category_id": 10,
            "language_id": 2,
            "country_id": 2,
            "diretor_id": 1,
            "star1_id": 2,
            "star2_id": 3,
            "star3_id": 4,
            "author_id": 13,
            "created_at": "2019-11-08 11:46:03",
            "updated_at": "2019-11-08 11:46:03",
            "deleted_at": null
        },
        {
            "id": 6,
            "title": "hfeahateh",
            "description": "descriheahartption",
            "imdb": "4.0",
            "image": "images\/xRqhufLc4LYCoXTPm80SCwKRpsCaFw60x8FICHKa.png",
            "year": 2015,
            "releaseDate": "2005-05-02",
            "revisted_at": "2019-11-07 00:00:00",
            "type_id": 1,
            "category_id": 1,
            "language_id": 1,
            "country_id": 3,
            "diretor_id": 5,
            "star1_id": 8,
            "star2_id": 3,
            "star3_id": null,
            "author_id": 1,
            "created_at": "2019-11-13 00:31:53",
            "updated_at": "2019-11-13 00:31:53",
            "deleted_at": null
        },
        {
            "id": 7,
            "title": "hfdjsrtj",
            "description": "descriptiontjghjsrtjs",
            "imdb": "5.0",
            "image": "images\/wuwytrF3GcruiJ155wOwW3pVYI84jPHwTuYxekXt.png",
            "year": 2012,
            "releaseDate": "2012-02-02",
            "revisted_at": "2019-11-02 00:00:00",
            "type_id": 1,
            "category_id": 1,
            "language_id": 1,
            "country_id": 1,
            "diretor_id": 1,
            "star1_id": 2,
            "star2_id": null,
            "star3_id": 2,
            "author_id": 1,
            "created_at": "2019-11-13 00:32:17",
            "updated_at": "2019-11-13 00:32:17",
            "deleted_at": null
        },
        {
            "id": 8,
            "title": "gfdhsgfh",
            "description": "descriptionrdharatsh",
            "imdb": "5.0",
            "image": "images\/x4JXQCYSqZONIp2uSxDo4rmfweTQ50t3kGfAGqog.png",
            "year": 2015,
            "releaseDate": "1994-05-05",
            "revisted_at": "2019-11-06 00:00:00",
            "type_id": 2,
            "category_id": 2,
            "language_id": 3,
            "country_id": 2,
            "diretor_id": 1,
            "star1_id": null,
            "star2_id": 2,
            "star3_id": 2,
            "author_id": 1,
            "created_at": "2019-11-13 00:37:56",
            "updated_at": "2019-11-13 00:37:56",
            "deleted_at": null
        },
        {
            "id": 9,
            "title": "hrhrst",
            "description": "description",
            "imdb": "1.0",
            "image": "images\/RJUuxA4hFa6TKjQdGLF9SKpRqMlIrtFfSSgjnfi1.png",
            "year": 2020,
            "releaseDate": "2020-02-02",
            "revisted_at": "2019-11-01 00:00:00",
            "type_id": 1,
            "category_id": 1,
            "language_id": 1,
            "country_id": 1,
            "diretor_id": null,
            "star1_id": 2,
            "star2_id": 2,
            "star3_id": 2,
            "author_id": 1,
            "created_at": "2019-11-13 00:57:34",
            "updated_at": "2019-11-13 00:57:34",
            "deleted_at": null
        },
        {
            "id": 10,
            "title": "jkhkhkhjk",
            "description": "safas",
            "imdb": "5.0",
            "image": "images\/9shVfs4xtrizBQq8kqR72zOImFTOQvasD0heMHtd.pdf",
            "year": 2020,
            "releaseDate": "2020-02-02",
            "revisted_at": null,
            "type_id": 1,
            "category_id": 3,
            "language_id": 3,
            "country_id": 3,
            "diretor_id": 1,
            "star1_id": 11,
            "star2_id": 11,
            "star3_id": 12,
            "author_id": null,
            "created_at": "2019-11-14 03:12:19",
            "updated_at": "2019-11-14 03:12:19",
            "deleted_at": null
        },
        {
            "id": 11,
            "title": "ffasfa",
            "description": "dsafawfa",
            "imdb": "5.0",
            "image": "images\/xZDvPbRab5Is3BGpGHvI4VHUvxI6xdGTuqnngewf.pdf",
            "year": 2020,
            "releaseDate": "2002-02-20",
            "revisted_at": null,
            "type_id": 1,
            "category_id": 6,
            "language_id": 4,
            "country_id": 2,
            "diretor_id": 5,
            "star1_id": 11,
            "star2_id": 10,
            "star3_id": 9,
            "author_id": null,
            "created_at": "2019-11-14 03:16:05",
            "updated_at": "2019-11-14 03:16:05",
            "deleted_at": null
        },
        {
            "id": 12,
            "title": "novotestee desta",
            "description": "fsdgarga",
            "imdb": "5.0",
            "image": "images\/mF4K3gHz6Kb9Gr5snmABGgKzyZ0NJnasG54BWIel.pdf",
            "year": 1994,
            "releaseDate": "1994-02-02",
            "revisted_at": null,
            "type_id": 2,
            "category_id": 1,
            "language_id": 1,
            "country_id": 1,
            "diretor_id": 1,
            "star1_id": 2,
            "star2_id": 4,
            "star3_id": 9,
            "author_id": null,
            "created_at": "2019-11-14 03:19:44",
            "updated_at": "2019-11-14 03:19:44",
            "deleted_at": null
        },
        {
            "id": 13,
            "title": "gbsjfasjkfk",
            "description": "bfsjdkgnakjng",
            "imdb": "5.0",
            "image": "images\/RrPbZZxipzvH6YpKs9BSlYgA8rVjg13RRCUlepkt.pdf",
            "year": 2014,
            "releaseDate": "1212-12-12",
            "revisted_at": null,
            "type_id": 1,
            "category_id": 1,
            "language_id": 1,
            "country_id": 1,
            "diretor_id": 1,
            "star1_id": 3,
            "star2_id": 4,
            "star3_id": 4,
            "author_id": null,
            "created_at": "2019-11-14 03:23:07",
            "updated_at": "2019-11-14 03:23:07",
            "deleted_at": null
        }
    ],
    "message": "Lista de Filmes",
    "result": "ok"
}
```

### HTTP Request
`GET api/movie`


<!-- END_a1392e4819b53c18330c39c0a3e350f3 -->

<!-- START_d54d64a569966712a9cd422b31bb8428 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/movie/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/movie/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/movie/create`


<!-- END_d54d64a569966712a9cd422b31bb8428 -->

<!-- START_c929c95d3d689c4e4c43ce4b1bcbff80 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/movie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/movie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/movie`


<!-- END_c929c95d3d689c4e4c43ce4b1bcbff80 -->

<!-- START_fb3187c2cb73b35ca4c56f615998164f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/movie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/movie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "title": "Joker1",
    "description": "In Gotham City, mentally-troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: \"The Joker\".",
    "imdb": "8.0",
    "image": "images\/4WyVCe8FipHZMCaLXe4hks8Z4RALoUQ3sy2LSFW8.png",
    "year": 2019,
    "releaseDate": "2019-11-07",
    "revisted_at": "2019-11-01 00:00:00",
    "type_id": 1,
    "category_id": 4,
    "language_id": 1,
    "country_id": 4,
    "diretor_id": 1,
    "star1_id": 2,
    "star2_id": 3,
    "star3_id": 4,
    "author_id": 5,
    "created_at": "2019-11-07 03:10:59",
    "updated_at": "2019-11-14 23:20:44",
    "deleted_at": null
}
```

### HTTP Request
`GET api/movie/{movie}`


<!-- END_fb3187c2cb73b35ca4c56f615998164f -->

<!-- START_50e1b09f63caacd93611f59fd6489aea -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/movie/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/movie/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/movie/{movie}/edit`


<!-- END_50e1b09f63caacd93611f59fd6489aea -->

<!-- START_237e0430692cf69e2ecfc8884aad090e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/movie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/movie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/movie/{movie}`

`PATCH api/movie/{movie}`


<!-- END_237e0430692cf69e2ecfc8884aad090e -->

<!-- START_815d9f1849d0295f089c16cac137da2b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/movie/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/movie/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/movie/{movie}`


<!-- END_815d9f1849d0295f089c16cac137da2b -->

<!-- START_f380b91d469dfe31cfef8686a40905ef -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/person" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/person"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Todd Phillips",
            "original_name": "Todd Phillips",
            "birthday": "1970-11-07",
            "job_id": 1,
            "image": "image.png",
            "created_at": "2019-11-07 03:10:52",
            "updated_at": "2019-11-07 03:10:52",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Joaquin Phoenix",
            "original_name": "Joaquin Rafael Bottom",
            "birthday": "1974-11-07",
            "job_id": 2,
            "image": "image.png",
            "created_at": "2019-11-07 03:10:52",
            "updated_at": "2019-11-07 03:10:52",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "Robert De Niro",
            "original_name": "Robert Anthony De Niro Jr.",
            "birthday": "2019-11-07",
            "job_id": 2,
            "image": "image.png",
            "created_at": "2019-11-07 03:10:52",
            "updated_at": "2019-11-07 03:10:52",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "Zazie Beetz",
            "original_name": "Zazie Olivia Beetz",
            "birthday": "1991-11-07",
            "job_id": 2,
            "image": "image.png",
            "created_at": "2019-11-07 03:10:52",
            "updated_at": "2019-11-07 03:10:52",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "Andy Muschietti",
            "original_name": "Andrés Muschietti",
            "birthday": "1973-11-07",
            "job_id": 1,
            "image": "image.png",
            "created_at": "2019-11-07 03:10:52",
            "updated_at": "2019-11-07 03:10:52",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "Bill Skarsgård",
            "original_name": "Bill Istvan Günther Skarsgård",
            "birthday": "1990-11-07",
            "job_id": 2,
            "image": "image.png",
            "created_at": "2019-11-07 03:10:52",
            "updated_at": "2019-11-07 03:10:52",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "Jaeden Martell",
            "original_name": "Jaeden Wesley Martell",
            "birthday": "2019-11-07",
            "job_id": 2,
            "image": "image.png",
            "created_at": "2019-11-07 03:10:52",
            "updated_at": "2019-11-07 03:10:52",
            "deleted_at": null
        },
        {
            "id": 8,
            "name": "Finn Wolfhard",
            "original_name": "Finn Wolfhard",
            "birthday": "2019-11-07",
            "job_id": 2,
            "image": "image.png",
            "created_at": "2019-11-07 03:10:52",
            "updated_at": "2019-11-07 03:10:52",
            "deleted_at": null
        },
        {
            "id": 9,
            "name": "Ryan Reynolds",
            "original_name": "Ryan Rodney Reynolds",
            "birthday": "1976-10-23",
            "job_id": 2,
            "image": "teste2.jpg",
            "created_at": "2019-11-08 02:03:21",
            "updated_at": "2019-11-08 02:13:18",
            "deleted_at": null
        },
        {
            "id": 10,
            "name": "hello",
            "original_name": "HEllo",
            "birthday": "2010-05-20",
            "job_id": 2,
            "image": "images\/mMzAFLinjM3laJPrw1qciQsTPAstaEDsAHAgZTOd.png",
            "created_at": "2019-11-08 03:24:37",
            "updated_at": "2019-11-08 03:24:37",
            "deleted_at": null
        },
        {
            "id": 11,
            "name": "novoteste",
            "original_name": "nelo junior",
            "birthday": "2020-02-02",
            "job_id": 2,
            "image": "images\/R8AktvrQOrvOiB2T4s2k3EyfVNiR5DZ2VDWJxJQT.jpeg",
            "created_at": "2019-11-13 23:07:58",
            "updated_at": "2019-11-14 00:44:02",
            "deleted_at": null
        },
        {
            "id": 12,
            "name": "nelo",
            "original_name": "nelo junior",
            "birthday": "2020-02-02",
            "job_id": 2,
            "image": "images\/Asg1WflICHiL9DxzXMFuEnOqnMkvlH7DdrTijECC.png",
            "created_at": "2019-11-13 23:09:28",
            "updated_at": "2019-11-13 23:09:28",
            "deleted_at": null
        },
        {
            "id": 13,
            "name": "nelo",
            "original_name": "nelo junior",
            "birthday": "2020-02-02",
            "job_id": 2,
            "image": "images\/hTMrtnhUnQTgTHo12nokm8XmstQlhacW59nvIAuO.png",
            "created_at": "2019-11-13 23:14:34",
            "updated_at": "2019-11-13 23:14:34",
            "deleted_at": null
        }
    ],
    "message": "Lista de Pessoas",
    "result": "ok"
}
```

### HTTP Request
`GET api/person`


<!-- END_f380b91d469dfe31cfef8686a40905ef -->

<!-- START_a68ad6efa063f68c75dd99afbdc0a27e -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/person/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/person/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/person/create`


<!-- END_a68ad6efa063f68c75dd99afbdc0a27e -->

<!-- START_ad1c79d7b13efab821eab1538f1a113d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/person" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/person"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/person`


<!-- END_ad1c79d7b13efab821eab1538f1a113d -->

<!-- START_4deac354184a674e2567e7f3c9537868 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/person/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/person/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Todd Phillips",
    "original_name": "Todd Phillips",
    "birthday": "1970-11-07",
    "job_id": 1,
    "image": "image.png",
    "created_at": "2019-11-07 03:10:52",
    "updated_at": "2019-11-07 03:10:52",
    "deleted_at": null
}
```

### HTTP Request
`GET api/person/{person}`


<!-- END_4deac354184a674e2567e7f3c9537868 -->

<!-- START_1dea203a40b73fb954e81ae7139472a9 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/person/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/person/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/person/{person}/edit`


<!-- END_1dea203a40b73fb954e81ae7139472a9 -->

<!-- START_2f7f68d5f4e2552055c5fd7916b1a473 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/person/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/person/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/person/{person}`

`PATCH api/person/{person}`


<!-- END_2f7f68d5f4e2552055c5fd7916b1a473 -->

<!-- START_152c196194da71f0b4c76e8c5fc14bd0 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/person/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/person/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/person/{person}`


<!-- END_152c196194da71f0b4c76e8c5fc14bd0 -->

<!-- START_c7fae8a06934c43d9aac54f559ea8bee -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/country" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/country"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Portugal",
            "flag": "pt",
            "created_at": "2019-11-07 03:10:00",
            "updated_at": "2019-11-07 03:10:00",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Espanha",
            "flag": "es",
            "created_at": "2019-11-07 03:10:00",
            "updated_at": "2019-11-07 03:10:00",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "França",
            "flag": "fr",
            "created_at": "2019-11-07 03:10:00",
            "updated_at": "2019-11-07 03:10:00",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "Estados Unidos da América",
            "flag": "EUA",
            "created_at": "2019-11-07 03:10:00",
            "updated_at": "2019-11-07 03:10:00",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "novoteste",
            "flag": "images\/n3vJoM2qecJNQbYIgtk7vG1K5DVNw5lAK0HjGBAx.jpeg",
            "created_at": "2019-11-07 03:10:00",
            "updated_at": "2019-11-14 01:34:25",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "Italy",
            "flag": "images\/ODV2Z0xwqDGOfrFv0rmDi2sclIJ1BckDdy25zOfe.jpeg",
            "created_at": "2019-11-14 02:37:31",
            "updated_at": "2019-11-14 02:37:31",
            "deleted_at": null
        }
    ],
    "message": "Lista de Países",
    "result": "ok"
}
```

### HTTP Request
`GET api/country`


<!-- END_c7fae8a06934c43d9aac54f559ea8bee -->

<!-- START_d0e34d00c9557d4e89290bccb0e19e94 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/country/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/country/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/country/create`


<!-- END_d0e34d00c9557d4e89290bccb0e19e94 -->

<!-- START_ad737d96b4511e210e932bbb8c8a5b05 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/country" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/country"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/country`


<!-- END_ad737d96b4511e210e932bbb8c8a5b05 -->

<!-- START_6a0364dcb3d4ce41d2269b044487641c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/country/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/country/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Portugal",
    "flag": "pt",
    "created_at": "2019-11-07 03:10:00",
    "updated_at": "2019-11-07 03:10:00",
    "deleted_at": null
}
```

### HTTP Request
`GET api/country/{country}`


<!-- END_6a0364dcb3d4ce41d2269b044487641c -->

<!-- START_0a39a0bec0254a67608b128c02d591fd -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/country/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/country/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/country/{country}/edit`


<!-- END_0a39a0bec0254a67608b128c02d591fd -->

<!-- START_460af50c7eabd663a275b437318f78c9 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/country/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/country/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/country/{country}`

`PATCH api/country/{country}`


<!-- END_460af50c7eabd663a275b437318f78c9 -->

<!-- START_957c718b964b96a83b1d966592818a9a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/country/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/country/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/country/{country}`


<!-- END_957c718b964b96a83b1d966592818a9a -->

<!-- START_db20564ba266cd451caac114b3eac8ab -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Ação",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Bibliografia",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "Comédia",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "Crime",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "Documentário",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "Ficção Científica",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "Drama",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 8,
            "name": "Mistério",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 9,
            "name": "Romance",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 10,
            "name": "Suspense",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 11,
            "name": "Terror",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 12,
            "name": "Thriller",
            "created_at": "2019-11-07 03:09:52",
            "updated_at": "2019-11-07 03:09:52",
            "deleted_at": null
        },
        {
            "id": 15,
            "name": "hjhjhj",
            "created_at": "2019-11-14 02:10:39",
            "updated_at": "2019-11-14 02:10:39",
            "deleted_at": null
        },
        {
            "id": 16,
            "name": "ghjbbljçk",
            "created_at": "2019-11-14 02:13:03",
            "updated_at": "2019-11-14 02:13:03",
            "deleted_at": null
        },
        {
            "id": 17,
            "name": "ghghffh",
            "created_at": "2019-11-14 02:15:24",
            "updated_at": "2019-11-14 02:15:24",
            "deleted_at": null
        },
        {
            "id": 18,
            "name": "xfgdg",
            "created_at": "2019-11-14 02:18:11",
            "updated_at": "2019-11-14 02:18:11",
            "deleted_at": null
        },
        {
            "id": 19,
            "name": "nova",
            "created_at": "2019-11-14 02:26:57",
            "updated_at": "2019-11-14 02:26:57",
            "deleted_at": null
        },
        {
            "id": 20,
            "name": "nova2",
            "created_at": "2019-11-14 02:28:29",
            "updated_at": "2019-11-14 02:28:29",
            "deleted_at": null
        }
    ],
    "message": "Lista de Categorias",
    "result": "ok"
}
```

### HTTP Request
`GET api/category`


<!-- END_db20564ba266cd451caac114b3eac8ab -->

<!-- START_ec11475782f550e9415364d0e8774ea0 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/category/create`


<!-- END_ec11475782f550e9415364d0e8774ea0 -->

<!-- START_894ef06ce7a41cb47f9c434fcd778d9a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/category`


<!-- END_894ef06ce7a41cb47f9c434fcd778d9a -->

<!-- START_977e23840a7e9249b1f7136f1eadabe2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Ação",
    "created_at": "2019-11-07 03:09:52",
    "updated_at": "2019-11-07 03:09:52",
    "deleted_at": null
}
```

### HTTP Request
`GET api/category/{category}`


<!-- END_977e23840a7e9249b1f7136f1eadabe2 -->

<!-- START_f29d34640ef1a69ac4a6e1495464a3bc -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/category/{category}/edit`


<!-- END_f29d34640ef1a69ac4a6e1495464a3bc -->

<!-- START_ed2985a22796532e66be664ff9783124 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/category/{category}`

`PATCH api/category/{category}`


<!-- END_ed2985a22796532e66be664ff9783124 -->

<!-- START_c663adad7473b698445af374c584ba20 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/category/{category}`


<!-- END_c663adad7473b698445af374c584ba20 -->

<!-- START_9b09923f7888aa41b2a661575e4df32e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/language" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/language"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Inglês",
            "created_at": "2019-11-07 03:10:16",
            "updated_at": "2019-11-07 03:10:16",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Português",
            "created_at": "2019-11-07 03:10:16",
            "updated_at": "2019-11-07 03:10:16",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "Francês",
            "created_at": "2019-11-07 03:10:16",
            "updated_at": "2019-11-07 03:10:16",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "Japonês",
            "created_at": "2019-11-14 02:31:26",
            "updated_at": "2019-11-14 02:31:26",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "Japonês2",
            "created_at": "2019-11-14 02:31:51",
            "updated_at": "2019-11-14 02:31:51",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "Italy",
            "created_at": "2019-11-14 02:36:05",
            "updated_at": "2019-11-14 02:36:05",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "Italy",
            "created_at": "2019-11-14 02:36:43",
            "updated_at": "2019-11-14 02:36:43",
            "deleted_at": null
        }
    ],
    "message": "Lista de Línguas",
    "result": "ok"
}
```

### HTTP Request
`GET api/language`


<!-- END_9b09923f7888aa41b2a661575e4df32e -->

<!-- START_3774901977d4283d576f84a8b0fe52f7 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/language/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/language/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/language/create`


<!-- END_3774901977d4283d576f84a8b0fe52f7 -->

<!-- START_b4e04ab111be04020beb846b93eb5877 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/language" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/language"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/language`


<!-- END_b4e04ab111be04020beb846b93eb5877 -->

<!-- START_fd209e726a1bdad3ef3a3370f33256f9 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/language/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/language/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Inglês",
    "created_at": "2019-11-07 03:10:16",
    "updated_at": "2019-11-07 03:10:16",
    "deleted_at": null
}
```

### HTTP Request
`GET api/language/{language}`


<!-- END_fd209e726a1bdad3ef3a3370f33256f9 -->

<!-- START_b4785ff3d49e0688d5faf191e74e6ec7 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/language/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/language/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/language/{language}/edit`


<!-- END_b4785ff3d49e0688d5faf191e74e6ec7 -->

<!-- START_90812c0f1d4f67979248e912956bba36 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/language/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/language/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/language/{language}`

`PATCH api/language/{language}`


<!-- END_90812c0f1d4f67979248e912956bba36 -->

<!-- START_4352ac4ee499ca5646eb81db6aab48b1 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/language/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/language/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/language/{language}`


<!-- END_4352ac4ee499ca5646eb81db6aab48b1 -->


