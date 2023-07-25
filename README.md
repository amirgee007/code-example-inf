# Code style

Uniformly use phpstorm's default formatting.

Press `Shift+Alt+L` to auto-format your code.

# Some examples for code standard

[best practices examples from INF - By Amir](https://docs.google.com/document/d/198pZCr6U-4nYTSnxpp_hA-UaVgDxIGdjdK_MwCPKtxQ/edit)

[Route](./routes/web.php)

[Curly braces](./app/Examples/CurlyBraces.php)

Dependency injection:

* [Not recommended examples](./app/Http/Controllers/Example/BadController.php)
* [Recommended examples](./app/Http/Controllers/Example/GoodController.php)

---

# How to use phpstorm code inspection

First, make sure your project in phpstorm is in the correct php version.

You can check it in the lower right corner of phpstorm window like `PHP: 8.1`

By default, it will set as `8.1` because we defined it in `composer.json`

So, we need to click and change it to `8.2` because we use php8.2 in inf2 server.

## Profile

The default profile of inspections is not suitable for laravel.

So I created a [profile](./inf_inspections.xml) for our project. I also pushed it to inf2 dev branch.

Everyone should import and use it to make sure we are in the same code standard.

1. go to `Settings -> Editor -> Inspections`
2. click the gear icon and select `Import`
3. choose `INF2 Standard`
4. click `OK`

## File Errors

Click the warning icon in the upper right corner of the editor,
then the results will show in the `Problems` window.

We can also find these errors in the scroll bar on the right side of the editor.

## Project Errors

1. `Alt+6` to open `Problems` window.
2. choose `Project Errors` tab and click `Inspect Code`
3. choose `Custom scopo` and click `...`
4. add a local scope and include these directories recursively:
    * app
    * config
    * routes
5. choose `INF2 Standard` for `Inspection profile`
6. click `Analyze`, then we can see the results.

## Typo and misspellings (Low priority)

It will be reported as a green wavy line.

We should fix it if it's a misspelling.

If you want to keep the word:

1. press `Alt+Enter` on this word.
2. select `Save 'xxx' to dictionary` and `Enter`

## Auto-fix by phpstorm

Most of the problems can be fixed automatically with phpstorm.

Just press `Alt+Enter` on the code warned

[Try it](./app/Examples/AutoFix.php)

## INF2 Standard

We need to fix all the issues except `Typo and misspellings`, or disable the inspection in specific place.



---

# How to use phpdoc for phpstorm

## Disable Inspection One-place-only

There will always be warnings that we can't fix or that are hard to fix,
and we don't want to update everyone's profiles to disable it.

Then we can disable it one-place-only:

1. press `Alt+Enter` on the code warned
2. press `→` to find options like `Suppress for file/method/statement`, and `Enter`

## Declare the type of variable

[Example](./app/Examples/VariableType.php)

## For magic method

[Example](./app/Examples/MagicMethod.php)
