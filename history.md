# hiqdev/hisite-core

## [0.1.0] - 2017-04-22

- Switched to `hidev-webapp`
    - [6fc726a] 2017-04-22 docs [@hiqsol]
    - [f3f0c36] 2017-04-17 improved README [@hiqsol]
    - [5c22fa5] 2017-04-17 improved config and params [@hiqsol]
    - [6feb689] 2017-04-17 removed require yii2-language [@hiqsol]
    - [4be3d76] 2017-04-17 added require yii2-swiftmailer [@hiqsol]
    - [77d42bf] 2017-04-17 added favicon.ico for copying [@hiqsol]
    - [d303654] 2017-04-16 renamed poweredBy params to dot style [@hiqsol]
    - [6f43e5b] 2017-04-16 added app.id and app.name params [@hiqsol]
    - [c2fb0b7] 2017-04-16 fixed typo [@hiqsol]
    - [25a9832] 2017-04-16 changed to use `hidev-webapp` <- hidev-hisite [@hiqsol]
    - [4d1ac56] 2017-04-16 removed src/config/bootstrap.php [@hiqsol]
    - [e62abdf] 2017-04-15 added RedirectRule [@hiqsol]
    - [123ffad] 2017-04-15 csfixed [@hiqsol]
- Renamed to `hisite` <- hisite-core
    - [7db9919] 2017-04-15 renamed to `hisite` <- hisite-core [@hiqsol]
    - [5ebcecc] 2017-04-11 added require vlucas/phpdotenv [@hiqsol]
    - [6c3c7af] 2017-04-10 added defines config [@hiqsol]
    - [ab8cb71] 2017-02-22 translations [@tafid]
- Fixed debug configuration
    - [32e5db9] 2017-02-15 fixed use of debug params in hisite config [@hiqsol]
    - [8d98cbb] 2017-02-14 added use of `debug.historySize` param [@hiqsol]
    - [2059af7] 2017-02-03 + default bootstrap script [@hiqsol]
    - [ba6ed42] 2017-02-03 + MailerInterface DI config [@hiqsol]
    - [3c95ba4] 2017-02-02 fixed enabling debug with `debug.enabled` param <- `YII_DEBUG_MODULE` constant [@hiqsol]
    - [ba3e317] 2017-01-24 + Application singleton DI config [@hiqsol]
    - [388eec1] 2017-01-13 removed urlManager default rules, looks like they are not needed [@hiqsol]
    - [fcc6a1e] 2017-01-12 removed second/excessive set of @hisite alias [@hiqsol]
    - [feffd7c] 2016-12-29 Use `YII_DEBUG_MODULE` constant instead of `YII_DEBUG` to bootstrap debug module [@SilverFire]
    - [af8d514] 2016-12-29 Use `YII_DEBUG_MODULE` constant instead of `YII_DEBUG` to bootstrap debug module [@SilverFire]
    - [e15f120] 2016-12-29 Use `YII_DEBUG_MODULE` constant instead of `YII_DEBUG` to enable debug module [@SilverFire]
    - [1a59abd] 2016-12-29 Added placeholders for mail-text and mail-html [@SilverFire]
    - [8f8d628] 2016-12-22 redone yii2-menumanager -> yii2-menus [@hiqsol]
    - [e7de113] 2016-12-22 removed require yii2-menumanager [@hiqsol]
    - [e41f939] 2016-12-22 + require yii2-menus [@hiqsol]
    - [615b4f5] 2016-12-15 Added language module [@tafid]
    - [114e057] 2016-12-15 Added yii2-language require [@tafid]
    - [ca778c5] 2016-12-13 Added isPost condition [@tafid]
    - [43a364e] 2016-12-13 Fix captcha [@tafid]
    - [10a493e] 2016-12-13 Added ContactController [@tafid]
    - [4f2a558] 2016-12-13 Index action return extra data, ContactForm model [@tafid]
    - [0e769a4] 2016-12-13 Added some style to Captcha [@tafid]

## [0.0.3] - 2016-12-06

- Added ValidateAction, RedirectAction
    - [a348624] 2016-12-06 csfixed [@hiqsol]
    - [a93fa3c] 2016-11-04 Added missing `allowedIps` parameter [@SilverFire]
    - [fdad063] 2016-11-03 improved debug config [@hiqsol]
    - [137b160] 2016-10-25 csfixed [@hiqsol]
    - [46e3ade] 2016-10-25 translations [@hiqsol]
    - [d9d015e] 2016-10-25 used standart paths for mail views [@hiqsol]
    - [6a076e0] 2016-10-22 added ValidateAction [@hiqsol]
    - [53301f0] 2016-10-18 translation [@tafid]
    - [91b5672] 2016-10-04 translations [@tafid]
    - [8d0414c] 2016-09-29 added translations [@hiqsol]
    - [ca68945] 2016-09-29 fixed namespaces in menus [@hiqsol]
    - [8bbad67] 2016-09-28 redone building theme pathMap with compilePathMap and substituteVars [@hiqsol]
    - [be0e704] 2016-09-28 viewPaths was redone to themedPaths in yii2-thememanager [@hiqsol]
    - [1b113c6] 2016-09-22 moved menus to own folder [@hiqsol]
    - [10348a5] 2016-09-21 improved logout action added redirect back if given [@hiqsol]
    - [d24d770] 2016-09-20 improved RedirectAction to bypass ready response [@hiqsol]
    - [e29028c] 2016-09-20 added RedirectAction [@hiqsol]
    - [14cf135] 2016-09-20 csfixed [@hiqsol]
    - [0fc0757] 2016-09-16 removed `hisite/page` translation [@hiqsol]
    - [9992140] 2016-09-16 simplified requirements [@hiqsol]
    - [60fdde0] 2016-09-16 removed AccessControl and VerbFilter from SiteController [@hiqsol]
    - [dbd322b] 2016-09-16 csfixed [@hiqsol]
    - [f661662] 2016-09-13 fixed RenderAction used id2camel for building view from action id [@hiqsol]
- Removed login views to hiam-core
    - [ddaa9ab] 2016-10-25 removed login views to hiam-core [@hiqsol]
    - [0acd593] 2016-10-14 added login oriented pages: signup, resetPassword, restorePassword, confirmPassword [@hiqsol]
    - [8cbf9f7] 2016-10-13 greatly improved LoginForm to be suitable for any login-like pages: signup, restore-password, reset-password [@hiqsol]

## [0.0.2] - 2016-09-08

- Added RenderAction and LoginForm
    - [6057c19] 2016-09-02 used LoginForm widget for login page [@hiqsol]
    - [8813158] 2016-08-28 added RenderAction and used for index, contacts, about, policy [@hiqsol]
- Fixed requirements and params
    - [d84fa8e] 2016-09-03 used empty <- isset [@hiqsol]
    - [b52e0d4] 2016-09-02 fixed use of params in config [@hiqsol]
    - [9c77e92] 2016-09-01 + powered by params [@hiqsol]
    - [183831d] 2016-09-01 + require hiqdev/yii2-thememanager [@hiqsol]
    - [8ee7b8e] 2016-08-31 changed pathDirs -> viewPaths [@hiqsol]
    - [89bec27] 2016-08-26 added big logo [@hiqsol]
    - [3aa7251] 2016-08-23 disabled big picture [@hiqsol]
    - [c1cd643] 2016-08-22 + themeManger pathDirs config [@hiqsol]

## [0.0.1] - 2016-08-22

- Added basics
    - [c971a74] 2016-08-22 added empty tests [@hiqsol]
    - [465d331] 2016-08-22 csfixed [@hiqsol]
    - [07007da] 2016-08-20 moved aliases config to front [@hiqsol]
    - [7b8ae5f] 2016-08-19 added FooterMenu [@hiqsol]
    - [77bbd94] 2016-08-19 added default error and login pages [@hiqsol]
    - [3ca9d44] 2016-08-19 + views for index, contact and about [@hiqsol]
    - [dfa1378] 2016-08-19 + views for index and about [@hiqsol]
    - [d371519] 2016-08-19 + MainMenu [@hiqsol]
    - [aed8d52] 2016-08-19 + require `yii2-menumanager` [@hiqsol]
    - [60f9f31] 2016-08-17 added translations for hisite and hisite/page [@hiqsol]
    - [e25f3e8] 2016-08-17 fixed typo, added actionContacts [@hiqsol]
    - [50f2410] 2016-08-13 + User component config [@hiqsol]
    - [253528a] 2016-08-13 added require `hidev-hisite` [@hiqsol]
    - [6068e3b] 2016-08-13 added controller and models [@hiqsol]
    - [fb2adfc] 2016-08-13 simplified config [@hiqsol]
    - [247b676] 2016-08-13 added configs [@hiqsol]
    - [1c2bb1e] 2016-08-09 inited [@hiqsol]

## [Development started] - 2016-08-09

[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
[c971a74]: https://github.com/hiqdev/hisite-core/commit/c971a74
[465d331]: https://github.com/hiqdev/hisite-core/commit/465d331
[07007da]: https://github.com/hiqdev/hisite-core/commit/07007da
[7b8ae5f]: https://github.com/hiqdev/hisite-core/commit/7b8ae5f
[77bbd94]: https://github.com/hiqdev/hisite-core/commit/77bbd94
[3ca9d44]: https://github.com/hiqdev/hisite-core/commit/3ca9d44
[dfa1378]: https://github.com/hiqdev/hisite-core/commit/dfa1378
[d371519]: https://github.com/hiqdev/hisite-core/commit/d371519
[aed8d52]: https://github.com/hiqdev/hisite-core/commit/aed8d52
[60f9f31]: https://github.com/hiqdev/hisite-core/commit/60f9f31
[e25f3e8]: https://github.com/hiqdev/hisite-core/commit/e25f3e8
[50f2410]: https://github.com/hiqdev/hisite-core/commit/50f2410
[253528a]: https://github.com/hiqdev/hisite-core/commit/253528a
[6068e3b]: https://github.com/hiqdev/hisite-core/commit/6068e3b
[fb2adfc]: https://github.com/hiqdev/hisite-core/commit/fb2adfc
[247b676]: https://github.com/hiqdev/hisite-core/commit/247b676
[1c2bb1e]: https://github.com/hiqdev/hisite-core/commit/1c2bb1e
[6057c19]: https://github.com/hiqdev/hisite-core/commit/6057c19
[b52e0d4]: https://github.com/hiqdev/hisite-core/commit/b52e0d4
[9c77e92]: https://github.com/hiqdev/hisite-core/commit/9c77e92
[183831d]: https://github.com/hiqdev/hisite-core/commit/183831d
[8ee7b8e]: https://github.com/hiqdev/hisite-core/commit/8ee7b8e
[8813158]: https://github.com/hiqdev/hisite-core/commit/8813158
[89bec27]: https://github.com/hiqdev/hisite-core/commit/89bec27
[3aa7251]: https://github.com/hiqdev/hisite-core/commit/3aa7251
[c1cd643]: https://github.com/hiqdev/hisite-core/commit/c1cd643
[d84fa8e]: https://github.com/hiqdev/hisite-core/commit/d84fa8e
[a348624]: https://github.com/hiqdev/hisite-core/commit/a348624
[a93fa3c]: https://github.com/hiqdev/hisite-core/commit/a93fa3c
[fdad063]: https://github.com/hiqdev/hisite-core/commit/fdad063
[137b160]: https://github.com/hiqdev/hisite-core/commit/137b160
[46e3ade]: https://github.com/hiqdev/hisite-core/commit/46e3ade
[ddaa9ab]: https://github.com/hiqdev/hisite-core/commit/ddaa9ab
[d9d015e]: https://github.com/hiqdev/hisite-core/commit/d9d015e
[6a076e0]: https://github.com/hiqdev/hisite-core/commit/6a076e0
[53301f0]: https://github.com/hiqdev/hisite-core/commit/53301f0
[0acd593]: https://github.com/hiqdev/hisite-core/commit/0acd593
[8cbf9f7]: https://github.com/hiqdev/hisite-core/commit/8cbf9f7
[91b5672]: https://github.com/hiqdev/hisite-core/commit/91b5672
[8d0414c]: https://github.com/hiqdev/hisite-core/commit/8d0414c
[ca68945]: https://github.com/hiqdev/hisite-core/commit/ca68945
[8bbad67]: https://github.com/hiqdev/hisite-core/commit/8bbad67
[be0e704]: https://github.com/hiqdev/hisite-core/commit/be0e704
[1b113c6]: https://github.com/hiqdev/hisite-core/commit/1b113c6
[10348a5]: https://github.com/hiqdev/hisite-core/commit/10348a5
[d24d770]: https://github.com/hiqdev/hisite-core/commit/d24d770
[e29028c]: https://github.com/hiqdev/hisite-core/commit/e29028c
[14cf135]: https://github.com/hiqdev/hisite-core/commit/14cf135
[0fc0757]: https://github.com/hiqdev/hisite-core/commit/0fc0757
[9992140]: https://github.com/hiqdev/hisite-core/commit/9992140
[60fdde0]: https://github.com/hiqdev/hisite-core/commit/60fdde0
[dbd322b]: https://github.com/hiqdev/hisite-core/commit/dbd322b
[f661662]: https://github.com/hiqdev/hisite-core/commit/f661662
[6fc726a]: https://github.com/hiqdev/hisite/commit/6fc726a
[f3f0c36]: https://github.com/hiqdev/hisite/commit/f3f0c36
[5c22fa5]: https://github.com/hiqdev/hisite/commit/5c22fa5
[6feb689]: https://github.com/hiqdev/hisite/commit/6feb689
[4be3d76]: https://github.com/hiqdev/hisite/commit/4be3d76
[77d42bf]: https://github.com/hiqdev/hisite/commit/77d42bf
[d303654]: https://github.com/hiqdev/hisite/commit/d303654
[6f43e5b]: https://github.com/hiqdev/hisite/commit/6f43e5b
[c2fb0b7]: https://github.com/hiqdev/hisite/commit/c2fb0b7
[25a9832]: https://github.com/hiqdev/hisite/commit/25a9832
[4d1ac56]: https://github.com/hiqdev/hisite/commit/4d1ac56
[e62abdf]: https://github.com/hiqdev/hisite/commit/e62abdf
[123ffad]: https://github.com/hiqdev/hisite/commit/123ffad
[7db9919]: https://github.com/hiqdev/hisite/commit/7db9919
[5ebcecc]: https://github.com/hiqdev/hisite/commit/5ebcecc
[6c3c7af]: https://github.com/hiqdev/hisite/commit/6c3c7af
[ab8cb71]: https://github.com/hiqdev/hisite/commit/ab8cb71
[32e5db9]: https://github.com/hiqdev/hisite/commit/32e5db9
[8d98cbb]: https://github.com/hiqdev/hisite/commit/8d98cbb
[2059af7]: https://github.com/hiqdev/hisite/commit/2059af7
[ba6ed42]: https://github.com/hiqdev/hisite/commit/ba6ed42
[3c95ba4]: https://github.com/hiqdev/hisite/commit/3c95ba4
[ba3e317]: https://github.com/hiqdev/hisite/commit/ba3e317
[388eec1]: https://github.com/hiqdev/hisite/commit/388eec1
[fcc6a1e]: https://github.com/hiqdev/hisite/commit/fcc6a1e
[feffd7c]: https://github.com/hiqdev/hisite/commit/feffd7c
[af8d514]: https://github.com/hiqdev/hisite/commit/af8d514
[e15f120]: https://github.com/hiqdev/hisite/commit/e15f120
[1a59abd]: https://github.com/hiqdev/hisite/commit/1a59abd
[8f8d628]: https://github.com/hiqdev/hisite/commit/8f8d628
[e7de113]: https://github.com/hiqdev/hisite/commit/e7de113
[e41f939]: https://github.com/hiqdev/hisite/commit/e41f939
[615b4f5]: https://github.com/hiqdev/hisite/commit/615b4f5
[114e057]: https://github.com/hiqdev/hisite/commit/114e057
[ca778c5]: https://github.com/hiqdev/hisite/commit/ca778c5
[43a364e]: https://github.com/hiqdev/hisite/commit/43a364e
[10a493e]: https://github.com/hiqdev/hisite/commit/10a493e
[4f2a558]: https://github.com/hiqdev/hisite/commit/4f2a558
[0e769a4]: https://github.com/hiqdev/hisite/commit/0e769a4
[Under development]: https://github.com/hiqdev/hisite/compare/0.0.3...HEAD
[0.0.3]: https://github.com/hiqdev/hisite/compare/0.0.2...0.0.3
[0.0.2]: https://github.com/hiqdev/hisite/compare/0.0.1...0.0.2
[0.0.1]: https://github.com/hiqdev/hisite/releases/tag/0.0.1
[0.1.0]: https://github.com/hiqdev/hisite/compare/0.0.3...0.1.0
