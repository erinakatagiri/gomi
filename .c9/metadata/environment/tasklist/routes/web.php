{"filter":false,"title":"web.php","tooltip":"/tasklist/routes/web.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":7,"column":79},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":9,"column":0},"end":{"row":11,"column":72},"action":"insert","lines":["Route::get('login', 'Auth\\LoginController@showLoginForm')->name('login');","Route::post('login', 'Auth\\LoginController@login')->name('login.post');","Route::get('logout', 'Auth\\LoginController@logout')->name('logout.get');"],"id":5}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":2,"column":0},"end":{"row":4,"column":3},"action":"insert","lines":["Route::get('/', function () {","    return view('welcome');","});"],"id":7}],[{"start":{"row":15,"column":72},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":17,"column":0},"end":{"row":19,"column":3},"action":"insert","lines":["Route::group(['middleware' => ['auth']], function () {","    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);","});"],"id":9}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":20,"column":2},"end":{"row":20,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528438105851,"hash":"214b80ef42b3e9bc09ac4a242eff4a22e2f4930d"}