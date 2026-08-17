
Run the following if you are setting up your project


```bash
node --version
```
should be: v24.10.0 or later 

```bash
npm --version
```
should be: 11.6.1 or later

```bash
git --version
```

This is in the session mats, so I'm not sure if we're using this.. but i added it anyways
```bash
pnpm --version
```
if that doesn't work first use:
```bash 
npm -g i pnpm
```
then check the version (10.28.2 or later)

slight note: to update npm you need to install a later version of "node" but this might be blocked so ignore it

--- 

PHP and Composer
--
Notice: to run these commands on VS code, ensure laragon is added to "path" by going on laragon:
`
 Menu -> Tools -> Path -> Add Laragon to path
`
Then you might have to log off and on to see effects

Side note: this is confirmed to have worked on Tafe computers as I did it in room "303" on computer second last on the right (near the window)

Run the following commands:

```bash
php --version
```
8.5 or later

```bash
composer --version
```
Both should be able to run, if they don't then most likely Laragon wasn't/isn't added to path



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
# Running the Servers:


For Main:

```bash
php artisan serve
```

For Dev:
```bash
npm run dev
```
