# Artisan Commands

### List Routes
```bash
php artisan route:list
```
With this it displays all the available routes in the program

### Clear Route Cache
```bash
php artisan route:clear
```
with this it removes all route cache

```bash 
php artisan tinker
```
> Note: you have to 



# Normalisation Check

### 1NF
#### checks:
> One value per field <BR>
> No repeating groups <BR>
> Each record has an identity

### 2NF
#### Ask:
> Does this information describe this entity?
#### Do not store:
> user_name
> user_email

inside Contact.
Those values describe the User.

### 3NF
#### Look for:
> Dupicated infomation <BR>
> Information belonging elsewhere <BR>
> Unnecessary calculated values <BR>
> Values that could become inconsistent

Keep infomation with the entity it describes.

