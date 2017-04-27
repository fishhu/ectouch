<?php

return [
    'admin/login' => 'console/auth/login',
    'admin/forgot' => 'console/auth/forgot',
    'admin/reset' => 'console/auth/reset',
    'dashboard' => 'console/default/index',
];



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
/**
Route::get('/', 'HomeController@index');

// catalog
Route::get('/catalog.html', function () {
    return 'catalog page.';
})->name('catalog');

// category
Route::get('/list/{id}.html', function ($id) {
    return 'category page. ' . $id;
})->name('category');

// goods
Route::get('/goods/{id}.html', function ($id) {
    return 'goods ' . $id;
})->name('goods');

// cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('/', function () {
        return 'cart ';
    })->name('cart');
});

// checkout
Route::group(['prefix' => 'flow'], function () {
    Route::get('/checkout.html', function () {
        return 'checkout ';
    })->name('checkout');
});

// done
Route::get('/done.html', function ($id) {
    return 'done ' . $id;
})->name('done');

// respond
Route::get('/respond/{code}.html', function ($code) {
    return 'respond ' . $code;
})->name('respond');


/*
|--------------------------------------------------------------------------
| Web User Module Routes
|--------------------------------------------------------------------------
*/

/**
// register
Route::get('/user/register.html', function () {
    return 'register ';
})->name('user.register');

// login
Route::get('/user/login.html', function () {
    return 'login ';
})->name('user.login');

// forget
Route::get('/user/forget.html', function () {
    return 'forget ';
})->name('user.forget');

// reset
Route::get('/user/reset/{hash}.html', function ($hash) {
    return 'reset ' . $hash;
})->name('user.reset');

// user center
Route::group(['prefix' => 'user'], function () {
    Route::get('/', function () {
        return 'user ';
    })->name('user');
});


/*
|--------------------------------------------------------------------------
| Web Extend Module Routes
|--------------------------------------------------------------------------
*/

/**
// activity
Route::group(['prefix' => 'activity'], function () {
    Route::get('/', function () {
        return 'activity';
    })->name('activity');
    Route::get('/{id}.html', function ($id) {
        return 'activity ' . $id;
    })->name('activity.detail');
});

// affiche
Route::group(['prefix' => 'affiche'], function () {
    Route::get('/', function () {
        return 'affiche';
    })->name('affiche');
});

// affiliate
Route::group(['prefix' => 'affiliate'], function () {
    Route::get('/', function () {
        return 'affiliate';
    })->name('affiliate');
});

// article
Route::group(['prefix' => 'article'], function () {
    Route::get('/', function () {
        return 'article';
    })->name('article');
    Route::get('/list/{id}.html', function ($id) {
        return 'article category';
    })->name('article.list');
    Route::get('/{id}.html', function ($id) {
        return 'article ';
    })->name('article.detail');
});

// auction
Route::group(['prefix' => 'auction'], function () {
    Route::get('/', function () {
        return 'auction';
    })->name('auction');
    Route::get('/{id}.html', function ($id) {
        return 'auction ' . $id;
    })->name('auction.detail');
});

// brand
Route::group(['prefix' => 'brand'], function () {
    Route::get('/', function () {
        return 'brand';
    })->name('brand');
    Route::get('/all.html', function () {
        return 'brand.all';
    })->name('brand.all');
    Route::get('/{id}.html', function ($id) {
        return 'brand';
    })->name('brand.detail');
});

// comment
Route::group(['prefix' => 'comment'], function () {
    Route::get('/', function () {
        return 'comment';
    })->name('comment');
});

// compare
Route::group(['prefix' => 'compare'], function () {
    Route::get('/', function () {
        return 'compare';
    })->name('compare');
});

// exchange
Route::group(['prefix' => 'exchange'], function () {
    Route::get('/', function () {
        return 'exchange';
    })->name('exchange');
    Route::get('/{id}.html', function ($id) {
        return 'exchange ' . $id;
    })->name('exchange.detail');
});

// group buy
Route::group(['prefix' => 'group_buy'], function () {
    Route::get('/', function () {
        return 'group_buy';
    })->name('group_buy');
    Route::get('/{id}.html', function ($id) {
        return 'group_buy ' . $id;
    })->name('group_buy.detail');
});

// message
Route::group(['prefix' => 'message'], function () {
    Route::get('/', function () {
        return 'message';
    })->name('message');
});

// package
Route::group(['prefix' => 'package'], function () {
    Route::get('/', function () {
        return 'package';
    })->name('package');
});

// pick_out
Route::group(['prefix' => 'pick_out'], function () {
    Route::get('/', function () {
        return 'pick_out';
    })->name('pick_out');
});

// quotation
Route::group(['prefix' => 'quotation'], function () {
    Route::get('/', function () {
        return 'quotation';
    })->name('quotation');
});

// misc
Route::group(['prefix' => 'misc'], function () {
    Route::get('/captcha', function () {
        return 'captcha';
    })->name('misc.captcha');
    Route::get('/region', function () {
        return 'region';
    })->name('misc.region');
});

// search
Route::group(['prefix' => 'search'], function () {
    Route::get('/', function () {
        return 'search';
    })->name('search');
});

// snatch
Route::group(['prefix' => 'snatch'], function () {
    Route::get('/', function () {
        return 'snatch';
    })->name('snatch');
    Route::get('/{id}.html', function ($id) {
        return 'snatch ' . $id;
    })->name('snatch.detail');
});

// topic
Route::group(['prefix' => 'topic'], function () {
    Route::get('/', function () {
        return 'topic';
    })->name('topic');
});

// vote
Route::group(['prefix' => 'vote'], function () {
    Route::get('/', function () {
        return 'vote';
    })->name('vote');
});

// wholesale
Route::group(['prefix' => 'wholesale'], function () {
    Route::get('/', function () {
        return 'wholesale';
    })->name('wholesale');
});


/*
|--------------------------------------------------------------------------
| Web Optional Module Routes
|--------------------------------------------------------------------------
*/

/**
// feed xml
Route::group(['prefix' => 'feed'], function () {
    Route::get('/', function () {
        return 'feed';
    })->name('feed');
    Route::get('/c{id}.xml', function ($id) {
        return 'feed-c ' . $id;
    })->name('feed.category');
    Route::get('/b{id}.xml', function ($id) {
        return 'feed-b ' . $id;
    })->name('feed.brand');
    Route::get('/type{id}.xml', function ($id) {
        return 'feed-type ' . $id;
    })->name('feed.type');
});

// sitemaps
Route::group(['prefix' => 'sitemaps'], function () {
    Route::get('/', function () {
        return 'sitemaps';
    })->name('sitemaps');
});
