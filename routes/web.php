<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



///////////////////////////////////////////ADMIN AREA///////////////////////////////////////////////////////////
Route::prefix('admin')->group(function () {

    Route::any('/', ['uses'=>'Auth\LoginController@getLoginForm','as'=>'GetLogin']);
    Route::any('/', ['uses'=>'Auth\LoginController@getLoginForm','as'=>'login']);
    Route::any('/login', ['uses'=>'Auth\LoginController@postSignIn','as'=>'loginNow']);

    Route::prefix('products')->group(function () {
        Route::any('add', ['uses' => 'Product\ProductController@AddProduct', 'as' => 'add.Product']);
        Route::any('view', ['uses' => 'Product\ProductController@AllProduct', 'as' => 'view.Product']);
        Route::any('store', ['uses' => 'Product\ProductController@storeProduct', 'as' => 'store.Product']);
        Route::any('update', ['uses' => 'Product\ProductController@UpdateProduct', 'as' => 'update.Product']);
        Route::any('delete', ['uses' => 'Product\ProductController@SoftDeleteProduct', 'as' => 'delete.Product.now']); //posting
        Route::any('enabling', ['uses' => 'Product\ProductController@EnablingProduct', 'as' => 'enabling.Product']);
        Route::any('duplicating', ['uses' => 'Product\ProductController@DuplicatingProduct', 'as' => 'duplicating.Product']);
        Route::any('deleting-sub-categories', ['uses' => 'Product\ProductController@SoftDeleteProductCategories', 'as' => 'deleting.Product.cat']);
        Route::any('view/{id}', ['uses' => 'Product\ProductController@ViewProduct', 'as' => 'editing.Product.now']); //posting
        Route::any('updating-products', ['uses' => 'Product\ProductController@UpdateProduct', 'as' => 'editing.product.now_submit']); //posting
        Route::any('removing-image', ['uses' => 'Product\ProductController@SoftDeleteImage', 'as' => 'editing.product.SoftDeleteImage']); //posting
        Route::any('extending-days', ['uses' => 'Product\ProductController@ExtendProduct', 'as' => 'admin.updating.days.Product']); //posting
    });

    Route::prefix('categories')->group(function () {
        Route::any('add', ['uses' => 'Product\ProductController@AddCategories', 'as' => 'add.Product.categories']);
        Route::any('view', ['uses' => 'Product\ProductController@ViewCategories', 'as' => 'view.Product.categories']);
        Route::any('editing/{id}', ['uses' => 'Product\ProductController@getEditCategory', 'as' => 'editing.category.now']); //posting
        Route::any('store', ['uses' => 'Product\ProductController@storeCategory', 'as' => 'add.category.now']); //posting
        Route::any('update', ['uses' => 'Product\ProductController@storeEditCategory', 'as' => 'update.category.now']); //posting
        Route::any('delete', ['uses' => 'Product\ProductController@SoftDeleteCategory', 'as' => 'delete.category.now']); //posting
        Route::any('enabling', ['uses' => 'Product\ProductController@EnablingCategories', 'as' => 'enabling.category']);


    });


    Route::prefix('tags')->group(function () {
        Route::any('add', ['uses' => 'ProductTags\ProductTagsController@Index', 'as' => 'add.tags']);
        Route::any('view', ['uses' => 'ProductTags\ProductTagsController@ViewTags', 'as' => 'view.tags']);
        Route::any('editing/{id}', ['uses' => 'ProductTags\ProductTagsController@getEditTags', 'as' => 'editing.tags.now']); //posting
        Route::any('store', ['uses' => 'ProductTags\ProductTagsController@storeTags', 'as' => 'add.tags.now']); //posting
        Route::any('update', ['uses' => 'ProductTags\ProductTagsController@storeEditTags', 'as' => 'update.tags.now']); //posting
        Route::any('delete', ['uses' => 'ProductTags\ProductTagsController@SoftDeleteTags', 'as' => 'delete.tags.now']); //posting
        Route::any('enabling', ['uses' => 'ProductTags\ProductTagsController@EnablingTags', 'as' => 'enabling.tags']);


    });


    Route::prefix('producttypes')->group(function () {
        Route::any('add', ['uses' => 'ProductTypes\ProductController@AddCategories', 'as' => 'add.Product.producttypes']);
        Route::any('view', ['uses' => 'ProductTypes\ProductController@ViewCategories', 'as' => 'view.Product.producttypes']);
        Route::any('editing/{id}', ['uses' => 'ProductTypes\ProductController@getEditCategory', 'as' => 'editing.producttypes.now']); //posting
        Route::any('store', ['uses' => 'ProductTypes\ProductController@storeCategory', 'as' => 'add.producttypes.now']); //posting
        Route::any('update', ['uses' => 'ProductTypes\ProductController@storeEditCategory', 'as' => 'update.producttypes.now']); //posting
        Route::any('delete', ['uses' => 'ProductTypes\ProductController@SoftDeleteCategory', 'as' => 'delete.producttypes.now']); //posting
        Route::any('enabling', ['uses' => 'ProductTypes\ProductController@EnablingCategories', 'as' => 'enabling.producttypes']);


    });

    Route::prefix('agents')->group(function () {
        Route::any('add', ['uses' => 'Admin\AdminController@AddAgents', 'as' => 'admin.add.agents']);
        Route::any('assign-agents', ['uses' => 'Admin\AdminController@AssignAgents', 'as' => 'admin.assign.agents']);
        Route::any('view', ['uses' => 'Admin\AdminController@AllAgents', 'as' => 'view.all.agents']);
        Route::any('view/{any}', ['uses' => 'Admin\AdminController@AllAgents', 'as' => 'view.all.agents2']);
        Route::any('store', ['uses' => 'Admin\AdminController@StoreAgents', 'as' => 'admin.store.agents']);
        Route::any('store-assign-agents', ['uses' => 'Admin\AdminController@storeAgentscategory', 'as' => 'admin.assign.agents.store']);
        Route::any('storing-agant-csv', ['uses' => 'Admin\AdminController@StoringAgentsCSV', 'as' => 'admin.storing.agentsCSV']);
        Route::any('store-csv', ['uses' => 'Admin\AdminController@uploadCSVFile', 'as' => 'admin.store.agentsCSV']);

    });

    Route::prefix('orders')->group(function () {
        Route::any('view', ['uses' => 'Orders\OrdersController@Index', 'as' => 'view.orders']);
        Route::any('enabling', ['uses' => 'Orders\OrdersController@EnablingTags', 'as' => 'enabling.tags']);


    });

    Route::prefix('users')->group(function () {
        Route::any('add', ['uses' => 'Admin\AdminController@AddUser', 'as' => 'admin.add.users']);
        Route::any('view', ['uses' => 'Admin\AdminController@MyProfile', 'as' => 'admin.view.user']);
        Route::any('all-users', ['uses' => 'Admin\AdminController@AllUsers', 'as' => 'admin.view.all.user']);
        Route::any('editing/{id}', ['uses' => 'Admin\AdminController@ViewUsersProfile', 'as' => 'editing.category.now']); //posting
        Route::any('store', ['uses' => 'Admin\AdminController@StoreUser', 'as' => 'admin.store.users']); //posting
        Route::any('update', ['uses' => 'Admin\AdminController@UpdateAccount', 'as' => 'admin.update.user']); //posting
        Route::any('enabling', ['uses' => 'Admin\AdminController@DisableUsers', 'as' => 'admin.enabling.user']); //posting
        Route::any('change-password', ['uses' => 'Admin\AdminController@ChangeUserPassword', 'as' => 'admin.change.password']); //posting
        Route::any('update-password', ['uses' => 'Admin\AdminController@ViewChangePassword', 'as' => 'admin.view.change.password']); //posting
    });

    Route::any('/dashboard', ['uses' => 'Admin\AdminController@getAdminIndex', 'as' => 'admin.home']);
    Route::get('/logout-admin', ['uses' => 'Auth\LoginController@logout', 'as' => 'logout.admin']);  /* this is for get */

});



///////////////////////////////////////////HOME AREA///////////////////////////////////////////////////////////


Route::any('/', ['uses'=>'Home\HomeController@Index','as'=>'home.index']);
Route::any('/about', ['uses'=>'Home\HomeController@getAbout', 'as' =>'about']);
Route::any('/contact-us', ['uses' => 'Home\HomeController@getContact', 'as' =>'contact']);
Route::any('/faq',['uses' => 'Home\HomeController@getFAQ', 'as' =>'faq']);
Route::any('/shipping-information',['uses' => 'Home\HomeController@getShpping', 'as' =>'shipping.info']);
Route::any('/terms',['uses' => 'Home\HomeController@getTerms', 'as' =>'terms.info']);
Route::any('/privacy',['uses' => 'Home\HomeController@getPrivacy', 'as' =>'privacy.policy']);
Route::any('/pop-up-view/{slug}', 'Home\HomeController@getPopUpViewIndex')->where('slug', '[\w\d\-\_]+');
Route::any('/search-result', ['uses' => 'Home\HomeController@getSearchresult', 'as' =>'search.now']);
Route::any('/compare','Home\HomeController@GetCompare');


/* ADDING TO CART SYSTEM */

Route::any('/shopping/checkout', ['uses'=>'Home\HomeController@getCheckout','as'=>'index.checkout']); /* this is for checkout*/
Route::any('/shopping/shopping_cart', ['uses'=>'Home\HomeController@getShopping_cart','as'=>'index.shopping_cart']); /* this is for checkout*/

/* END OF ADDING TO CART SYSTEM */

Route::any('/user-login', ['uses' => 'Home\HomeController@getLogin', 'as' =>'login.log']);
Route::any('/register-with-us', ['uses' => 'Home\HomeController@getRegister', 'as' =>'reg.register']);

Route::any('/sign-up-now', ['uses' => 'Home\HomeController@storeUsers', 'as' =>'signup.now']);  /* this is post */
Route::any('/contact-us-now', ['uses' => 'Home\HomeController@storeContactus', 'as' =>'contact.us.now']); /* this is post */
Route::any('/forget-password', ['uses' => 'Home\HomeController@GetforgetPassword', 'as' =>'forget.pass']);
Route::any('/changing-password', ['uses' => 'Home\HomeController@postForgetPass', 'as' =>'submit.pass']); /* this is post */
Route::any('/signing-now', ['uses' => 'Home\HomeController@postSignIn', 'as' =>'login.in.user']); /* this is post */


//////////////////////////////////////CHECKING OUT  CART////////////////////////////////////////////////////
Route::any('/signing-now-and-checkout', ['uses' => 'Home\HomeController@postSignInAndCheckout', 'as' =>'login.in.user.checkout']); /* this is post */
Route::any('/checkout-after-signin', ['uses' => 'Home\HomeController@checkout', 'as' =>'checkout.api']); /* this is post */

Route::any('/guest-and-checkout', ['uses' => 'Home\HomeController@checkout', 'as' =>'guest.user.checkout']); /* this is post */




Route::any('/user-dashboard', ['uses' => 'Dashboard@getIndex', 'as' =>'user.dashboard']);
Route::any('/user-settings', ['uses' => 'Dashboard@getSettings', 'as' =>'user.settings']);
Route::any('/user-profile', ['uses' => 'Dashboard@getSettings', 'as' =>'user.profile']);
Route::any('/user-orders', ['uses' => 'Dashboard@getSettings', 'as' =>'user.orders']);

Route::any('/updating-profile-picture', ['uses' => 'Dashboard@storeDp', 'as' =>'add.dp']); /* this is post */
Route::any('/updating-user-information', ['uses' => 'Dashboard@storeINFO', 'as' =>'add.info']); /* this is post */
Route::any('/updating-user-bank-info', ['uses' => 'Dashboard@storeBANKINFO', 'as' =>'add.bbank.info']); /* this is post */
Route::any('/pay-me-ref-now', ['uses' => 'Dashboard@storePayMeNOWREF', 'as' =>'add.pay.me.ref.now']); /* this is post */

Route::any('/logout-user', ['uses' =>'Home\HomeController@getLogOut', 'as' => 'logout.user']);
Route::any('/logout-admin', ['uses' =>'Admin@getLogOut', 'as' => 'logout.admin']);

/////////////////////////// Adding to CART ///////////////////////////////
Route::prefix('cart')->group(function () {
    Route::any('/add-to-cart','Cart\CartApi@addtocart');
    Route::patch('/update-cart', 'Cart\CartApi@update');
    Route::delete('/remove-from-cart', 'Cart\CartApi@remove');

});

////////////////////////// End of Adding to CART /////////////////////////


/////////////////////////// Adding to Compare ///////////////////////////////
Route::prefix('compare')->group(function () {
    Route::any('/add-to-compare','Compare\CompareApi@addtocompare');
    Route::patch('/update-compare', 'Compare\CompareApi@update');
    Route::delete('/remove-from-compare', 'Compare\CompareApi@remove');

});

Route::any('categories/{slug}', 'Home\HomeController@CategoryDetails')->where('slug', '[\w\d\-\_]+');
Route::any('categories/{slug}/{name}', 'Home\HomeController@CategoryDetails')->where('slug', '[\w\d\-\_]+');
Route::any('/{slug}', 'Home\HomeController@ProductDetails')->where('slug', '[\w\d\-\_]+');
////////////////////////// End of Adding to CART /////////////////////////






