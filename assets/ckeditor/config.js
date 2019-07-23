/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {

    config.toolbarCanCollapse = true;
    // config.toolbar = 'Cms';
    config.toolbar_Cms =
    [
        ['Cut','Copy','Paste','PasteText','PasteFromWord'],
        ['Undo','Redo','-','SelectAll','RemoveFormat'],
        ['Bold','Italic','-','Subscript','Superscript'],
        ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
        ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
        ['Link','Unlink','Anchor'],
        ['Table','SpecialChar'],
        '/',
        ['Styles','Format','FontSize'],
        ['TextColor'],
        ['Maximize', 'ShowBlocks']
    ];
};
