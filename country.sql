#
# Tabel structuur voor tabel `country`
#

CREATE TABLE country (
  country_id int(11) NOT NULL auto_increment,
  tld char(2) NOT NULL default '',
  name varchar(100) NOT NULL default '',
  picture varchar(100) default '',
  PRIMARY KEY  (country_id)
) TYPE=MyISAM;

#
# Gegevens worden uitgevoerd voor tabel `country`
#

INSERT INTO country VALUES (1,'se','Sweden',NULL);
INSERT INTO country VALUES (2,'nl','Netherlands',NULL);
INSERT INTO country VALUES (3,'de','Germany',NULL);
INSERT INTO country VALUES (4,'fi','Finland',NULL);
INSERT INTO country VALUES (5,'it','Italy',NULL);
INSERT INTO country VALUES (6,'pl','Poland',NULL);
INSERT INTO country VALUES (7,'ro','Romania',NULL);
INSERT INTO country VALUES (82,'gb','United Kingdom',NULL);
INSERT INTO country VALUES (9,'us','United States',NULL);
INSERT INTO country VALUES (10,'ac','Ascension Island',NULL);
INSERT INTO country VALUES (11,'ad','Andorra',NULL);
INSERT INTO country VALUES (12,'ae','United Arab Emirates',NULL);
INSERT INTO country VALUES (13,'af','Afghanistan',NULL);
INSERT INTO country VALUES (14,'ag','Antigua and Barbuda',NULL);
INSERT INTO country VALUES (15,'ai','Anguilla',NULL);
INSERT INTO country VALUES (16,'al','Albania',NULL);
INSERT INTO country VALUES (17,'am','Armenia',NULL);
INSERT INTO country VALUES (18,'an','Netherlands Antilles',NULL);
INSERT INTO country VALUES (19,'ao','Angola',NULL);
INSERT INTO country VALUES (20,'aq','Antarctica',NULL);
INSERT INTO country VALUES (21,'ar','Argentina',NULL);
INSERT INTO country VALUES (22,'as','American Samoa',NULL);
INSERT INTO country VALUES (23,'at','Austria',NULL);
INSERT INTO country VALUES (24,'au','Australia',NULL);
INSERT INTO country VALUES (25,'aw','Aruba',NULL);
INSERT INTO country VALUES (26,'az','Azerbaijan',NULL);
INSERT INTO country VALUES (27,'ax','Aland Islands',NULL);
INSERT INTO country VALUES (28,'ba','Bosnia and Herzegovina',NULL);
INSERT INTO country VALUES (29,'bb','Barbados',NULL);
INSERT INTO country VALUES (30,'bd','Bangladesh',NULL);
INSERT INTO country VALUES (31,'be','Belgium',NULL);
INSERT INTO country VALUES (32,'bf','Burkina Faso',NULL);
INSERT INTO country VALUES (33,'bg','Bulgaria',NULL);
INSERT INTO country VALUES (34,'bh','Bahrain',NULL);
INSERT INTO country VALUES (35,'bi','Burundi',NULL);
INSERT INTO country VALUES (36,'bj','Benin',NULL);
INSERT INTO country VALUES (37,'bm','Bermuda',NULL);
INSERT INTO country VALUES (38,'bn','Brunei Darussalam',NULL);
INSERT INTO country VALUES (39,'bo','Bolivia',NULL);
INSERT INTO country VALUES (40,'br','Brazil',NULL);
INSERT INTO country VALUES (41,'bs','Bahamas',NULL);
INSERT INTO country VALUES (42,'bt','Bhutan',NULL);
INSERT INTO country VALUES (43,'bv','Bouvet Island',NULL);
INSERT INTO country VALUES (44,'bw','Botswana',NULL);
INSERT INTO country VALUES (45,'by','Belarus',NULL);
INSERT INTO country VALUES (46,'bz','Belize',NULL);
INSERT INTO country VALUES (47,'ca','Canada',NULL);
INSERT INTO country VALUES (48,'cc','Cocos (Keeling) Islands',NULL);
INSERT INTO country VALUES (49,'cd','Congo',NULL);
INSERT INTO country VALUES (50,'cf','Central African Republic',NULL);
INSERT INTO country VALUES (51,'ch','Switzerland',NULL);
INSERT INTO country VALUES (52,'ci','Cote d\'Ivoire',NULL);
INSERT INTO country VALUES (53,'ck','Cook Islands',NULL);
INSERT INTO country VALUES (54,'cl','Chile',NULL);
INSERT INTO country VALUES (55,'cm','Cameroon',NULL);
INSERT INTO country VALUES (56,'cn','China',NULL);
INSERT INTO country VALUES (57,'co','Colombia',NULL);
INSERT INTO country VALUES (58,'cr','Costa Rica',NULL);
INSERT INTO country VALUES (59,'cs','Serbia and Montenegro',NULL);
INSERT INTO country VALUES (60,'cu','Cuba',NULL);
INSERT INTO country VALUES (61,'cv','Cape Verde',NULL);
INSERT INTO country VALUES (62,'cx','Christmas Island',NULL);
INSERT INTO country VALUES (63,'cy','Cyprus',NULL);
INSERT INTO country VALUES (64,'cz','Czech Republic',NULL);
INSERT INTO country VALUES (65,'dj','Djibouti',NULL);
INSERT INTO country VALUES (66,'dk','Denmark',NULL);
INSERT INTO country VALUES (67,'dm','Dominica',NULL);
INSERT INTO country VALUES (68,'do','Dominican Republic',NULL);
INSERT INTO country VALUES (69,'dz','Algeria',NULL);
INSERT INTO country VALUES (70,'ee','Estonia',NULL);
INSERT INTO country VALUES (71,'eg','Egypt',NULL);
INSERT INTO country VALUES (72,'eh','Western Sahara',NULL);
INSERT INTO country VALUES (73,'er','Eritrea',NULL);
INSERT INTO country VALUES (74,'es','Spain',NULL);
INSERT INTO country VALUES (75,'et','Ethiopia',NULL);
INSERT INTO country VALUES (76,'eu','European Union',NULL);
INSERT INTO country VALUES (77,'fi','Finland',NULL);
INSERT INTO country VALUES (78,'fk','Falkland Islands (Malvinas)',NULL);
INSERT INTO country VALUES (79,'fm','Federal State of\nMicronesia',NULL);
INSERT INTO country VALUES (80,'fo','Faroe Islands',NULL);
INSERT INTO country VALUES (81,'ga','Gabon',NULL);
INSERT INTO country VALUES (83,'ge','Georgia',NULL);
INSERT INTO country VALUES (84,'gf','French Guiana',NULL);
INSERT INTO country VALUES (85,'gg','Guernsey',NULL);
INSERT INTO country VALUES (86,'gh','Ghana',NULL);
INSERT INTO country VALUES (87,'gi','Gibraltar',NULL);
INSERT INTO country VALUES (88,'gl','Greenland',NULL);
INSERT INTO country VALUES (89,'gm','Gambia',NULL);
INSERT INTO country VALUES (90,'gn','Guinea',NULL);
INSERT INTO country VALUES (91,'gp','Guadeloupe',NULL);
INSERT INTO country VALUES (92,'gq','Equatorial Guinea',NULL);
INSERT INTO country VALUES (93,'gr','Greece',NULL);
INSERT INTO country VALUES (94,'hm','Heard and McDonald Islands',NULL);
INSERT INTO country VALUES (95,'ht','Haiti',NULL);
INSERT INTO country VALUES (96,'hu','Hungary',NULL);
INSERT INTO country VALUES (97,'ie','Ireland',NULL);
INSERT INTO country VALUES (98,'il','Israel',NULL);
INSERT INTO country VALUES (99,'im','Isle of Man',NULL);
INSERT INTO country VALUES (100,'io','British Indian Ocean Territory',NULL);
INSERT INTO country VALUES (101,'iq','Iraq',NULL);
INSERT INTO country VALUES (102,'Ir','Islamic Republic of Iran',NULL);
INSERT INTO country VALUES (103,'is','Iceland',NULL);
INSERT INTO country VALUES (104,'ke','Kenya',NULL);
INSERT INTO country VALUES (105,'kg','Kyrgyzstan',NULL);
INSERT INTO country VALUES (106,'ki','Kiribati',NULL);
INSERT INTO country VALUES (107,'km','Comoros',NULL);
INSERT INTO country VALUES (108,'kn','Saint Kitts and Nevis',NULL);
INSERT INTO country VALUES (109,'kp','Korea, Democratic People\'s Republic',NULL);
INSERT INTO country VALUES (110,'ky','Cayman Islands',NULL);
INSERT INTO country VALUES (111,'kz','Kazakhstan',NULL);
INSERT INTO country VALUES (112,'la','Lao People\'s Democratic Republic',NULL);
INSERT INTO country VALUES (113,'lb','Lebanon',NULL);
INSERT INTO country VALUES (114,'lc','Saint Lucia',NULL);
INSERT INTO country VALUES (115,'li','Liechtenstein',NULL);
INSERT INTO country VALUES (116,'lk','Sri Lanka',NULL);
INSERT INTO country VALUES (117,'lr','Liberia',NULL);
INSERT INTO country VALUES (118,'ls','Lesotho',NULL);
INSERT INTO country VALUES (119,'lt','Lithuania',NULL);
INSERT INTO country VALUES (120,'lu','Luxembourg',NULL);
INSERT INTO country VALUES (121,'lv','Latvia',NULL);
INSERT INTO country VALUES (122,'ly','Libyan Arab Jamahiriya',NULL);
INSERT INTO country VALUES (123,'ma','Morocco',NULL);
INSERT INTO country VALUES (124,'mc','Monaco',NULL);
INSERT INTO country VALUES (125,'md','Moldova, Republic of',NULL);
INSERT INTO country VALUES (126,'mg','Madagascar',NULL);
INSERT INTO country VALUES (127,'mh','Marshall Islands',NULL);
INSERT INTO country VALUES (128,'mk','Macedonia, The Former Yugoslav Republic of',NULL);
INSERT INTO country VALUES (129,'ml','Mali',NULL);
INSERT INTO country VALUES (130,'mm','Myanmar',NULL);
INSERT INTO country VALUES (131,'mp','Northern Mariana Islands',NULL);
INSERT INTO country VALUES (132,'mq','Martinique',NULL);
INSERT INTO country VALUES (133,'ms','Montserrat',NULL);
INSERT INTO country VALUES (134,'mt','Malta',NULL);
INSERT INTO country VALUES (135,'mu','Mauritius',NULL);
INSERT INTO country VALUES (136,'mv','Maldives',NULL);
INSERT INTO country VALUES (137,'mw','Malawi',NULL);
INSERT INTO country VALUES (138,'mx','Mexico',NULL);
INSERT INTO country VALUES (139,'my','Malaysia',NULL);
INSERT INTO country VALUES (140,'mz','Mozambique',NULL);
INSERT INTO country VALUES (141,'na','Namibia',NULL);
INSERT INTO country VALUES (142,'nc','New Caledonia',NULL);
INSERT INTO country VALUES (143,'ne','Niger',NULL);
INSERT INTO country VALUES (144,'ni','Nicaragua',NULL);
INSERT INTO country VALUES (145,'no','Norway',NULL);
INSERT INTO country VALUES (146,'np','Nepal',NULL);
INSERT INTO country VALUES (147,'nr','Nauru',NULL);
INSERT INTO country VALUES (148,'nu','Niue',NULL);
INSERT INTO country VALUES (149,'nz','New Zealand',NULL);
INSERT INTO country VALUES (150,'om','Oman',NULL);
INSERT INTO country VALUES (151,'pa','Panama',NULL);
INSERT INTO country VALUES (152,'pe','Peru',NULL);
INSERT INTO country VALUES (153,'pf','French Polynesia',NULL);
INSERT INTO country VALUES (154,'pg','Papua New Guinea',NULL);
INSERT INTO country VALUES (155,'ph','Philippines',NULL);
INSERT INTO country VALUES (156,'pk','Pakistan',NULL);
INSERT INTO country VALUES (157,'pl','Poland',NULL);
INSERT INTO country VALUES (158,'pm','Saint Pierre and Miquelon',NULL);
INSERT INTO country VALUES (159,'pn','Pitcairn Island',NULL);
INSERT INTO country VALUES (160,'pr','Puerto Rico',NULL);
INSERT INTO country VALUES (161,'ps','Palestinian Territories',NULL);
INSERT INTO country VALUES (162,'pt','Portugal',NULL);
INSERT INTO country VALUES (163,'pw','Palau',NULL);
INSERT INTO country VALUES (164,'py','Paraguay',NULL);
INSERT INTO country VALUES (165,'qa','Qatar',NULL);
INSERT INTO country VALUES (166,'re','Reunion Island',NULL);
INSERT INTO country VALUES (167,'ru','Russian Federation',NULL);
INSERT INTO country VALUES (168,'rw','Rwanda',NULL);
INSERT INTO country VALUES (169,'sa','Saudi Arabia',NULL);
INSERT INTO country VALUES (170,'sb','Solomon Islands',NULL);
INSERT INTO country VALUES (171,'sc','Seychelles',NULL);
INSERT INTO country VALUES (172,'sd','Sudan',NULL);
INSERT INTO country VALUES (173,'sg','Singapore',NULL);
INSERT INTO country VALUES (174,'sh','Saint Helena',NULL);
INSERT INTO country VALUES (175,'sl','Slovenia',NULL);
INSERT INTO country VALUES (176,'sj','Svalbard and Jan Mayen Islands',NULL);
INSERT INTO country VALUES (177,'sk','Slovak Republic',NULL);
INSERT INTO country VALUES (178,'sl','Sierra Leone',NULL);
INSERT INTO country VALUES (179,'sm','San Marino',NULL);
INSERT INTO country VALUES (180,'sn','Senegal',NULL);
INSERT INTO country VALUES (181,'so','Somalia',NULL);
INSERT INTO country VALUES (182,'sr','Suriname',NULL);
INSERT INTO country VALUES (183,'st','Sao Tome and Principe',NULL);
INSERT INTO country VALUES (184,'sv','El Salvador',NULL);
INSERT INTO country VALUES (185,'sy','Syrian Arab Republic',NULL);
INSERT INTO country VALUES (186,'sz','Swaziland',NULL);
INSERT INTO country VALUES (187,'tc','Turks and Caicos Islands',NULL);
INSERT INTO country VALUES (188,'td','Chad',NULL);
INSERT INTO country VALUES (189,'tf','French Southern Territories',NULL);
INSERT INTO country VALUES (190,'tg','Togo',NULL);
INSERT INTO country VALUES (191,'th','Thailand',NULL);
INSERT INTO country VALUES (192,'tj','Tajikistan',NULL);
INSERT INTO country VALUES (193,'tk','Tokelau',NULL);
INSERT INTO country VALUES (194,'tl','Timor-Leste',NULL);
INSERT INTO country VALUES (195,'tm','Turkmenistan',NULL);
INSERT INTO country VALUES (196,'tn','Tunisia',NULL);
INSERT INTO country VALUES (197,'to','Tonga',NULL);
INSERT INTO country VALUES (198,'tp','East Timor',NULL);
INSERT INTO country VALUES (199,'tr','Turkey',NULL);
INSERT INTO country VALUES (200,'tt','Trinidad and Tobago',NULL);
INSERT INTO country VALUES (201,'tv','Tuvalu',NULL);
INSERT INTO country VALUES (202,'tw','Taiwan',NULL);
INSERT INTO country VALUES (203,'tz','Tanzania',NULL);
INSERT INTO country VALUES (204,'ua','Ukraine',NULL);
INSERT INTO country VALUES (205,'ug','Uganda',NULL);
INSERT INTO country VALUES (206,'uk','United Kingdom',NULL);
INSERT INTO country VALUES (207,'um','United States Minor Outlying Islands',NULL);
INSERT INTO country VALUES (208,'uy','Uruguay',NULL);
INSERT INTO country VALUES (209,'uz','Uzbekistan',NULL);
INSERT INTO country VALUES (210,'va','Holy See (Vatican City State)\r\n',NULL);
INSERT INTO country VALUES (211,'vc','Saint Vincent and the Grenadines',NULL);
INSERT INTO country VALUES (212,'ve','Venezuela',NULL);
INSERT INTO country VALUES (213,'vg','Virgin Islands, British',NULL);
INSERT INTO country VALUES (214,'vi','Virgin Islands, U.S.',NULL);
INSERT INTO country VALUES (215,'vn','Vietnam',NULL);
INSERT INTO country VALUES (216,'vu','Vanuatu',NULL);
INSERT INTO country VALUES (217,'wf','Wallis and Futuna Islands',NULL);
INSERT INTO country VALUES (218,'ws','Western Samoa',NULL);
INSERT INTO country VALUES (219,'ye','Yemen',NULL);
INSERT INTO country VALUES (220,'yt','Mayotte',NULL);
INSERT INTO country VALUES (221,'yu','Yugoslavia',NULL);
INSERT INTO country VALUES (222,'za','South Africa',NULL);
INSERT INTO country VALUES (223,'zm','Zambia',NULL);
INSERT INTO country VALUES (224,'zw','Zimbabwe',NULL);

