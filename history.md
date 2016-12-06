# hiqdev/hisite-core

## [0.0.3] - 2016-12-06

- Added ValidateAction, RedirectAction
    - [a348624] 2016-12-06 csfixed [sol@hiqdev.com]
    - [a93fa3c] 2016-11-04 Added missing `allowedIps` parameter [d.naumenko.a@gmail.com]
    - [fdad063] 2016-11-03 improved debug config [sol@hiqdev.com]
    - [137b160] 2016-10-25 csfixed [sol@hiqdev.com]
    - [46e3ade] 2016-10-25 translations [sol@hiqdev.com]
    - [d9d015e] 2016-10-25 used standart paths for mail views [sol@hiqdev.com]
    - [6a076e0] 2016-10-22 added ValidateAction [sol@hiqdev.com]
    - [53301f0] 2016-10-18 translation [andreyklochok@gmail.com]
    - [91b5672] 2016-10-04 translations [andreyklochok@gmail.com]
    - [8d0414c] 2016-09-29 added translations [sol@hiqdev.com]
    - [ca68945] 2016-09-29 fixed namespaces in menus [sol@hiqdev.com]
    - [8bbad67] 2016-09-28 redone building theme pathMap with compilePathMap and substituteVars [sol@hiqdev.com]
    - [be0e704] 2016-09-28 viewPaths was redone to themedPaths in yii2-thememanager [sol@hiqdev.com]
    - [1b113c6] 2016-09-22 moved menus to own folder [sol@hiqdev.com]
    - [10348a5] 2016-09-21 improved logout action added redirect back if given [sol@hiqdev.com]
    - [d24d770] 2016-09-20 improved RedirectAction to bypass ready response [sol@hiqdev.com]
    - [e29028c] 2016-09-20 added RedirectAction [sol@hiqdev.com]
    - [14cf135] 2016-09-20 csfixed [sol@hiqdev.com]
    - [0fc0757] 2016-09-16 removed `hisite/page` translation [sol@hiqdev.com]
    - [9992140] 2016-09-16 simplified requirements [sol@hiqdev.com]
    - [60fdde0] 2016-09-16 removed AccessControl and VerbFilter from SiteController [sol@hiqdev.com]
    - [dbd322b] 2016-09-16 csfixed [sol@hiqdev.com]
    - [f661662] 2016-09-13 fixed RenderAction used id2camel for building view from action id [sol@hiqdev.com]
- Removed login views to hiam-core
    - [ddaa9ab] 2016-10-25 removed login views to hiam-core [sol@hiqdev.com]
    - [0acd593] 2016-10-14 added login oriented pages: signup, resetPassword, restorePassword, confirmPassword [sol@hiqdev.com]
    - [8cbf9f7] 2016-10-13 greatly improved LoginForm to be suitable for any login-like pages: signup, restore-password, reset-password [sol@hiqdev.com]

## [0.0.2] - 2016-09-08

- Added RenderAction and LoginForm
    - [6057c19] 2016-09-02 used LoginForm widget for login page [sol@hiqdev.com]
    - [8813158] 2016-08-28 added RenderAction and used for index, contacts, about, policy [sol@hiqdev.com]
- Fixed requirements and params
    - [d84fa8e] 2016-09-03 used empty <- isset [sol@hiqdev.com]
    - [b52e0d4] 2016-09-02 fixed use of params in config [sol@hiqdev.com]
    - [9c77e92] 2016-09-01 + powered by params [sol@hiqdev.com]
    - [183831d] 2016-09-01 + require hiqdev/yii2-thememanager [sol@hiqdev.com]
    - [8ee7b8e] 2016-08-31 changed pathDirs -> viewPaths [sol@hiqdev.com]
    - [89bec27] 2016-08-26 added big logo [sol@hiqdev.com]
    - [3aa7251] 2016-08-23 disabled big picture [sol@hiqdev.com]
    - [c1cd643] 2016-08-22 + themeManger pathDirs config [sol@hiqdev.com]

## [0.0.1] - 2016-08-22

- Added basics
    - [c971a74] 2016-08-22 added empty tests [sol@hiqdev.com]
    - [465d331] 2016-08-22 csfixed [sol@hiqdev.com]
    - [07007da] 2016-08-20 moved aliases config to front [sol@hiqdev.com]
    - [7b8ae5f] 2016-08-19 added FooterMenu [sol@hiqdev.com]
    - [77bbd94] 2016-08-19 added default error and login pages [sol@hiqdev.com]
    - [3ca9d44] 2016-08-19 + views for index, contact and about [sol@hiqdev.com]
    - [dfa1378] 2016-08-19 + views for index and about [sol@hiqdev.com]
    - [d371519] 2016-08-19 + MainMenu [sol@hiqdev.com]
    - [aed8d52] 2016-08-19 + require `yii2-menumanager` [sol@hiqdev.com]
    - [60f9f31] 2016-08-17 added translations for hisite and hisite/page [sol@hiqdev.com]
    - [e25f3e8] 2016-08-17 fixed typo, added actionContacts [sol@hiqdev.com]
    - [50f2410] 2016-08-13 + User component config [sol@hiqdev.com]
    - [253528a] 2016-08-13 added require `hidev-hisite` [sol@hiqdev.com]
    - [6068e3b] 2016-08-13 added controller and models [sol@hiqdev.com]
    - [fb2adfc] 2016-08-13 simplified config [sol@hiqdev.com]
    - [247b676] 2016-08-13 added configs [sol@hiqdev.com]
    - [1c2bb1e] 2016-08-09 inited [sol@hiqdev.com]

## [Development started] - 2016-08-09

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
