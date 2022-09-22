/**
 * Image Preview in img elements
 * @param files
 * @param elementId
 * @param attributeName
 * @constructor
 */
function PreviewImage(files,elementId,attributeName = 'src') {
    var element = document.getElementById(elementId);
    var img = URL.createObjectURL(files);
    element.setAttribute(attributeName, img);

}
