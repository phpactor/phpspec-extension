PhpSpec Extension
=================

![CI](https://github.com/phpactor/phpspec-extension/workflows/CI/badge.svg)

Phpspec support for Phpactor.

![recording](https://user-images.githubusercontent.com/530801/50404106-00ba1b00-079c-11e9-917c-846bb56fdeb2.gif)

Features
========

- [x] Suggests subject methods when in spec class.

Todo:

- [ ] Add `MethodProphecy` type to method calls on collaborators.
- [ ] Add Subject type to return types.
- [ ] Adds the `Collaborator` type to collaborators.
- [ ] Class generator for class.
- [ ] Initialize parameters from `.phpspec.yml`

Installation
============

```
$ /path/to/your/phpactor extension:install phpactor/phpspec-extension
```

Tips and Tricks
===============

## Test Navigation

Phpactor allows you to jump to related files, just add the following
[configuration](https://phpactor.github.io/phpactor/configuration.html) to
jump from your standard source code to the test:

```javascript
{
    "navigator.destinations": {
        "source": "lib\/<kernel>Test.php"
        "spec": "spec\/<kernel>Spec.php"
    },
}
```

See [Jump to related
file](https://phpactor.github.io/phpactor/navigation.html#jump-to-or-generate-related-file)
for more information.

Contributing
------------

This package is open source and welcomes contributions! Feel free to open a
pull request on this repository.

Support
-------

- Create an issue on the main [Phpactor](https://github.com/phpactor/phpactor) repository.
- Join the `#phpactor` channel on the Slack [Symfony Devs](https://symfony.com/slack-invite) channel.

