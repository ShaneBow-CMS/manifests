# Manifest

Many games (e.g. [labeler](/game/labeler/)) have several data sets and courses have multiple lessons.
 Manifests are the way to deliver these different data to a single app.

Each *Manifest* has several standard fields, with an arbitrarily defined `payload` (which is an SQL `blob` type).
 Here are the fields in a manifest record in the database:
~~~
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `ord` int(10) unsigned COMMENT "old id - use for ordering",
 `otype` smallint(1) unsigned NOT NULL DEFAULT 4096 COMMENT 'obj type',
 `title` varchar(255) NOT NULL,
 `desc` text,
 `mid` int(10) unsigned NOT NULL default 0 COMMENT "image",
 `access` smallint NOT NULL COMMENT "owner-only trial free member purchase",
 `flags` int(3) unsigned NOT NULL default 0 COMMENT "publish draft current featured",
 `payload` blob,
 `owner` int(10) unsigned NOT NULL default 1,
 `uid_lmod` int(10) unsigned NULL COMMENT "author",
 `debut` int(10) unsigned NOT NULL,
 `lmod` int(10) unsigned NULL,
~~~

#### OTYPE *Object Types* {#otypes}
The `otype` — short for *Object TYPE* — field is used to identity what kind of manifest this is and this can be mapped
 to a set of apis or apps that *knows* how to encode/decode the `payload` field.