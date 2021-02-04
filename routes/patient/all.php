Route::group(
[
'as' => 'patient.',
'namespace' => 'Patient',
'prefix' => 'patient',
],
function () {

include_once 'dashboard/dashboard.php';

}
);