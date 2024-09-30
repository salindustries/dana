# Dana @ sekolah.io

A collection management system for academic institution and related parties.

The system are designed to be hosted in a PaaS mode (single entity usage in contrast to multi-tenancy mode)

## Prerequisites

If you don't already have an Apache local environment with PHP and MySQL, use one of the following links:

- Windows: https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows
- Linux: https://howtoubuntu.org/how-to-install-lamp-on-ubuntu
- Mac: https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/
  
Also, you will need to install Composer: https://getcomposer.org/doc/00-intro.md   
And Laravel: https://laravel.com/docs/9.x/installation

## Installation

1. In your terminal run `composer install`
2. Copy `.env.example` to `.env` and updated the configurations (mainly the database configuration)
3. In your terminal run `php artisan key:generate`
4. Run `php artisan migrate --seed` to create the database tables and seed the roles and users tables
5. Run `php artisan storage:link` to create the storage symlink (if you are using **Vagrant** with **Homestead** for development, remember to ssh into your virtual machine and run the command from there).

## Usage

Register a user or login with the default users with different roles from your database and start testing (make sure to run the migrations and seeders for these credentials to be available):

- **admin@material.com** and password **secret**
- **creator@material.com** and password **secret**
- **member@material.com** and password **secret**

### Login

If you are not logged in you can only access this page or the Sign Up page. The default url takes you to the login page where you use the default credentials **admin@material.com** with the password **secret** but you can change them with the credentials for creator and for member. Logging in is possible only with already existing credentials. For this to work you should have run the migrations. The user also has the option to choose if he wants to be remembered or not.

The `App/Http/Livewire/Auth/Login.php` handles the logging in of an existing user.

```
      public function store()
        {
            $attributes = $this->validate();
    
            if (! auth()->attempt($attributes)) {
                throw ValidationException::withMessages([
                    'email' => 'Your provided credentials could not be verified.'
                ]);
            }
    
            session()->regenerate();
    
            return redirect('/dashboard');
    
        }

```

### Register

You can register as a user by filling in the name, email, role and password for your account. For your role you can choose between the Admin, Creator and Member. It is important to know that an admin user has access to all the pages and actions, can delete, add and edit another users, other roles, items, tags or categories; a creator user has acces to category, tag and item management, but can not add, edit or delete other users; a member user has access to the item management but can not take any actions. You can do this by accessing the sign up page from the "**Sign Up**" button in the top navbar or by clicking the "**Sign Up**" button from the bottom of the log in form. Another simple way is adding **/sign-up** in the url.

The `App/Http/Livewire/Auth/Register.php` handles the registration of a new user.

```php
    public function store(){

          $attributes = $this->validate();
  
          $user = User::create($attributes);
  
          auth()->login($user);
          
          return redirect('/dashboard');
      } 
```

### Forgot Password

If a user forgets the account's password it is possible to reset the password. For this the user should click on the "**here**" under the login form.

The `App/Http/Livewire/Auth/ForgetPassword.php` takes care of sending an email to the user where he can reset the password afterwards.

```php
   public function show(){
          
              $this->validate();
      
              $user = User::where('email', $this->email)->first();
      
                  if($user){
      
                      $this->notify(new ResetPassword($user->id));
      
                      return back()->with('status', "Email sent.");
      
                  } else {
                      return back()->with('email', "Invalid email");
                  }
          }
```

### Reset Password

The user who forgot the password gets an email on the account's email address. The user can access the reset password page by clicking the button found in the email. The link for resetting the password is available for 12 hours. The user must add the new password and confirm the password for his password to be updated. The user is redirected to the login page.

The `App/Http/Livewire/Auth/ResetPassword.php` helps the user reset the password.

```
    public function update(){
        
            $this->validate(); 
              
            $existingUser = User::where('email', $this->email)->first();
    
            if($existingUser && $existingUser->id == $this->urlID) { 
                $existingUser->update([
                    'password' => $this->password
                ]);
                redirect('sign-in')->with('status', 'Password changed.');
            } else {
                return back()->with('email', "Invalid email");
            }
        
        }
```

### My Profile

The profile can be accessed by a logged in user by clicking "**User Profile**" from the sidebar. The user can add information like phone number, location or change name, email and password.

The `App/Http/Livewire/LaravelExamples/Profile/Edit.php` handles the user's profile information.

```
    public function passwordUpdate(){

        $this->validate([ 
            'old_password' => 'required',
            'new_password' => 'required|min:7|same:confirmationPassword',
        ]);
 
        $hashedPassword = auth()->user()->password;

        if (Hash::check($this->old_password , $hashedPassword)) {
            if (!Hash::check($this->new_password , $hashedPassword))
            {
                $users = User::findorFail(auth()->user()->id);
                $users->password = $this->new_password;
                $users->save();
                return back()->with(['success'=>'Password successfully updated.']);
            }
            else{
                return back()->with(['error' =>"New password can not be the old password!"]);
            } 
        }
        else{
            return back()->with(['error' =>"Old password doesn't match"]);
        }
    } 
```

### User Management

The user management can be accessed by clicking "**User Management**" from the **Laravel Examples** section from the sidebar. This page is available for users with the **Admin** role and the user is able to **add**, **edit** and **delete** other users. For adding a new user you can press the "**+ Add User**". If you would like to edit or delete an user you can click on the **Action** column. It is also possible to sort the fields or to search in the fields.

On the page for adding a new user you will find a form which allows you to fill the information. All pages are generated using blade templates.

The `App/Http/Livewire/LaravelExamples/UserManagement/Create.php ` takes care of data validation and creating the new user:

```
      public function store(){

        $this->validate();


        User::create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => $this->password,
            'picture' => $this->picture->store('profile', 'public'),
            'role_id' => $this->role_id,
        ]);

        return redirect(route('user-management'))->with('status','User successfully created.');
    }
```
Once the user pressed **Send** at the end of the form the new user is added to the table.
For authorizing this actions have been used policies such as `App\Policies\UserPolicy`:
```
    /**
     * Determine whether the authenticate user can manage other users.
     */
    public function manageUsers(User $user)
    {
        return $user->isAdmin();
    }
```

### Role Management

The PRO version lets you add roles to the user. The default roles are **Admin**, **Creator**  and **Member**. The role management can be accessed by clicking "**Role Management**" from the **Laravel Examples** section of the sidebar. This page is available for users with the **Admin** role and the user is able to **add**, **edit** and **delete** roles. For adding a new role you can press the "**+ Add Role**" button. If you would like to edit or delete a role you can click on the **Action** column. It is also possible to sort the fields or to search in the fields.

On the page for adding a new role you will find a form which allows you to fill the name and the description of the new role.

The `App/Http/Livewire/LaravelExamples/Roles/Create.php ` takes care of data validation and creation of a the new role:

```
    public function store(){

        $this->validate();

        Role::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        return redirect(route('role-management'))->with('status','Role successfully created.');
    }

```

### Category Management

The theme has some default categories but an **Admin** or **Creator** user can manage these categories.The category management can be accessed by clicking "**Category Management**" from the **Laravel Examples** section of the sidebar. The authenticated user can **add**, **edit** and **delete** categories. For adding a new category you can press the "**+ Add Category**" button. If you would like to edit or delete a category you can click on the **Action** column. It is also possible to sort the fields or to search in the fields.

On the page for adding a new category you will find a form which allows you to fill the name and the description of the new category.

The `App/Http/Livewire/LaravelExamples/Category/Edit.php ` takes care of data validation when changing a category and updating it:

```
       public function update(){
        
        $this->validate();

        $this->category->update();

        return redirect(route('category-management'))->with('status', 'Category successfully updated.');
    }
```

### Tag Management

The theme has some default tags but an **Admin** or **Creator** user can manage these tags.The tag management can be accessed by clicking "**Tag Managmenet**" from the **Laravel Examples** section from the sidebar. The authenticated user can **add**, **edit** and **delete** tags. For adding a new tag you can press the "**+ Add Tag**" button. If you would like to edit or delete a tag you can click on the **Action** column. It is also possible to sort the fields or to search in the fields.

On the page for adding a new category you will find a form which allows you to fill the name and the description of the new tag and on the edit page you will find a similar form for the changes you wish to make.

The `/resources/views/livewire/laravel-examples/tag/edit.blade.php` is the blade template for editing a tag:

```php
    @error('tag.color')
    <p class='text-danger'>{{ $message }} </p>
    @enderror
    <div class="form-group col-12 mt-2 col-md-6">
        <label for="exampleColorInput" class="form-label">Color picker</label>
        <input wire:model.lazy="tag.color" type="color" class="form-control form-control-color" id="exampleColorInput">
    </div>
```

### Item Management

Item Management is the most advanced example included in the PRO theme because every item has a picture, has a category and has multiple tags. The item management can be accessed by clicking "**Item Management**" from the **Laravel Examples** section of the sidebar. The authenticated user as an Admin or Creator can **add**, **edit** and **delete** items. For adding a new item you can press the "**+ Add Item**" button. If you would like to edit or delete an item you can click on the **Action** column. It is also possible to sort the fields or to search in the fields. The Member user can not take any actions on the item, he is only able to see the item management table.

On the page for adding a new item you will find a form which allows you to add an image of the item, to  fill the name, description of the item, a dropdown to choose the category and a multiselect for the tags.

The `App/Http/Livewire/LaravelExamples/Items/Create.php ` takes care of data validation when adding a new item and of the item creation(see snippet below):

```
      
    public function store(){
        $this->validate();
        $item = Item::create([

            'name' => $this->name,
            'category_id' =>$this->category_id,
            'description' => $this->description,
            'picture' => $this->picture->store('pictures', 'public'),
            'status' =>$this->status,
            'options' => $this->options,
            'homepage' => $this->showOnHomepage ? 1 : 0,
            'date' => Carbon::parse($this->date)->format('Y-m-d')

        ]);

        sort($this->tags_id);
        $item->tag()->sync($this->tags_id, false);

        return redirect(route('item-management'))->with('status','Item successfully created.');

    }
```

## File Structure

```
+---app
|   +---Console
|   |       Kernel.php
|   +---Exceptions
|   |       Handler.php
|   +---Http
|   |   +---Controllers
|   |   |       Controller.php
|   |   |       
|   |   +---Middleware
|   |   |       Authenticate.php
|   |   |       EncryptCookies.php
|   |   |       PreventRequestsDuringMaintenance.php
|   |   |       RedirectIfAuthenticated.php
|   |   |       TrimStrings.php
|   |   |       TrustHosts.php
|   |   |       TrustProxies.php
|   |   |       VerifyCsrfToken.php
|   |   |
|   |   +---Livewire
|   |   |   | 
|   |   |   +---Applications
|   |   |   |     Calendar.php
|   |   |   |     Crm.php
|   |   |   |     Datatables.php
|   |   |   |     Kanban.php
|   |   |   |     Stats.php
|   |   |   |     Wizard.php
|   |   |   | 
|   |   |   +---Auth
|   |   |   |     ForgotPassword.php
|   |   |   |     Login.php
|   |   |   |     Logout.php
|   |   |   |     Register.php
|   |   |   |     ResetPassword.php
|   |   |   | 
|   |   |   +---Authentication
|   |   |   |        |
|   |   |   |        +---Error
|   |   |   |        |     Error404.php
|   |   |   |        |     Error500.php
|   |   |   |        |
|   |   |   |        +---Lock
|   |   |   |        |     Basic.php
|   |   |   |        |     Cover.php
|   |   |   |        |     Illustration.php
|   |   |   |        |
|   |   |   |        +---Reset
|   |   |   |        |     Basic.php
|   |   |   |        |     Cover.php
|   |   |   |        |     Illustration.php
|   |   |   |        |
|   |   |   |        +---SignIn
|   |   |   |        |     Basic.php
|   |   |   |        |     Cover.php
|   |   |   |        |     Illustration.php
|   |   |   |        |
|   |   |   |        +---SignUp
|   |   |   |        |     Basic.php
|   |   |   |        |     Cover.php
|   |   |   |        |     Illustration.php
|   |   |   |        |
|   |   |   |        \---Verification
|   |   |   |              Basic.php
|   |   |   |              Cover.php
|   |   |   |              Illustration.php
|   |   |   | 
|   |   |   +---Dashboard
|   |   |   |     Automotive.php
|   |   |   |     Discover.php
|   |   |   |     Index.php
|   |   |   |     Sales.php
|   |   |   |     SmartHome.php
|   |   |   |
|   |   |   +---Ecommerce
|   |   |   |        |
|   |   |   |        +---Orders
|   |   |   |        |     Details.php
|   |   |   |        |     OrderList.php
|   |   |   |        |
|   |   |   |        +---Products
|   |   |   |        |     EditProduct.php
|   |   |   |        |     NewProduct.php
|   |   |   |        |     ProductPage.php
|   |   |   |        |     ProductsList.php
|   |   |   |        |
|   |   |   |        \---Referral.php
|   |   |   |
|   |   |   +---LaravelExamples
|   |   |   |        |
|   |   |   |        +---Category
|   |   |   |        |     Create.php
|   |   |   |        |     Edit.php
|   |   |   |        |     Index.php
|   |   |   |        |
|   |   |   |        +---Items
|   |   |   |        |     Create.php
|   |   |   |        |     Edit.php
|   |   |   |        |     Index.php
|   |   |   |        |
|   |   |   |        +---Profile
|   |   |   |        |     Edit.php
|   |   |   |        |
|   |   |   |        +---Roles
|   |   |   |        |     Create.php
|   |   |   |        |     Edit.php
|   |   |   |        |     Index.php
|   |   |   |        |
|   |   |   |        +---Tag
|   |   |   |        |     Create.php
|   |   |   |        |     Edit.php
|   |   |   |        |     Index.php
|   |   |   |        |
|   |   |   |        \---UserManagement
|   |   |   |              Create.php
|   |   |   |              Edit.php
|   |   |   |              Index.php
|   |   |   |
|   |   |   \---Pages
|   |   |           |
|   |   |           +---Account
|   |   |           |     Billing.php
|   |   |           |     Invoice.php
|   |   |           |     Security.php
|   |   |           |     Settings.php
|   |   |           |
|   |   |           +---Profile
|   |   |           |     Overview.php
|   |   |           |     Projects.php
|   |   |           |     
|   |   |           +---Projects
|   |   |           |     General.php
|   |   |           |     NewProject.php
|   |   |           |     Timeline.php
|   |   |           |     
|   |   |           +---Users
|   |   |           |     NewUser.php
|   |   |           |     Reports.php
|   |   |           |     
|   |   |           +---Vr
|   |   |           |     VrDefault.php
|   |   |           |     VrInfo.php
|   |   |           |
|   |   |           | Charts.php
|   |   |           | PricingPage.php
|   |   |           | Notifications.php
|   |   |           | Rtl.php
|   |   |           | SweetAlerts.php
|   |   |           \ Widgets.php
|   |   |   
|   |    \---Kernel.php   
|   |   
|   +---Models
|   |        Category.php
|   |        Item.php
|   |        Role.php
|   |        Tag.php
|   |        User.php
|   |
|   +---Notifications
|   |        ResetPassword.php
|   |     
|   +---Policies
|   |        CategoryPolicy.php
|   |        ItemPolicy.php
|   |        RolePolicy.php
|   |        TagPolicy.php
|   |        UserPolicy.php
|   |
|   |---Proviers
|   |      AppServiceProvider.php
|   |      AuthServiceProvider.php
|   |      BroadcastServiceProvider.php
|   |      EventServiceProvider.php
|   |      RouteServiceProvider.php
|   | 
|   \---View
|          App.php
|          Base.php
|   
....
```

## Browser Support
At present, we officially aim to support the last two versions of the following browsers:

<img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/chrome.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/firefox.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/edge.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/safari.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/opera.png" width="64" height="64">
