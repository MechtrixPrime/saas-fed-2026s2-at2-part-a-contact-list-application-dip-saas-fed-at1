# Section 1 - Setting up:

When you either setting up the project or moving to another computer, you might have to run the following this section.

#### Checking versions
You can either run these commands on VS code or laragon terminal

> Notes: <BR>
If you're not on the Tafe Computers you can update all the following otherwise you can ignore them if their not the correct versions.

the commands:

```bash
node --version
```
should be: v24.10.0 or later 

> Note: to update npm you need to install a later version of "node" but this might be blocked on the tafe computers so ignore it

```bash
npm --version
```
should be: 11.6.1 or later

```bash
git --version
```

#### Extra Installs (Not Required)

This is in the session mats, so I'm not sure if we're using this.. but i added it anyways
```bash
pnpm --version
```
if that doesn't work first use:
```bash 
npm -g i pnpm
```
then check the version (10.28.2 or later)

PHP and Composer
--
Notice: to run these commands on VS code, ensure laragon is added to "path" by going on laragon: <BR>
`
 Menu -> Tools -> Path -> Add Laragon to path
` <BR>
Then you might have to log off and on to see effects

Side note: this is confirmed to have worked on Tafe computers as I did it on one of the Tafe computers

Run the following commands:

```bash
php --version
```
8.5 or later

```bash
composer --version
```
Both should be able to run, if they don't then most likely Laragon isn't added to path

---

Run the following:

```bash
composer setup
```
Notice: it does the following commands
```
"composer install",
"@php -r \"file_exists('.env') || copy('.env.example', '.env');\"",
"@php artisan key:generate",
"@php artisan migrate --force",
"npm install --ignore-scripts",
"npm run build"
```
Instead of running one by one

---

# Recommended Folder Structure

All course work should be stored inside the Laragon **www** directory.

Example:

```text
C:\ProgramData\Laragon\www\
    Sources\
        Repos\
            contact-list
```

---
# Running the Servers:


--- 
# Section 2 - Running The Servers:
For Main:

```bash
php artisan serve
```

For Dev:
```bash
npm run dev
```
