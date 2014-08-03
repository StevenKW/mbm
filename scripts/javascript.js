/** this creates a shortcut so
 * you can type $ rather than
 * document.getElementById(id)
*/
var $ = function (id) {
    return document.getElementById(id);
};

/**  this is the function that will get executed */
var copyEntities = function () {
    $("entityAto").value = $("entityA").value;
    $("entityBto").value = $("entityB").value;
};

/** These are the event handlers that
 *  watch for a change in entityA / entityB */
window.onload = function () {
    $("entityA").onchange = copyEntities;
    $("entityB").onchange = copyEntities;
};