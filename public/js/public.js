/**
 * init
 * @param  {[type]} ){} [description]
 * @return {[type]}       [description]
 */
$(function() {
    head_img_default();
    upload_img();
})

function head_img_default() {
    $('.default-head').one('error', function() {
        $(this).attr('src', '/img/head.png');
    });
    $('.default-head[src=""]').each(function() {
        $(this).attr('src', '/img/head.png');
    });
}

function upload_img() {
    $('.upload-img').click(function() {
        var id = $(this).attr('for-id');
        if (id == '' || $('#' + id).length == 0) {
            return;
        }
        var obj = $('#' + id);
        modalimg(obj,'上传图片','/uploadimg');
     
    });
}


// $('#myModal').on('shown.bs.modal', function () {
//   $('#myInput').focus()
// })

// $('#myModal').on('loaded.bs.modal', function (e) {
//   console.log('load');
// })

// $('body').on('hidden.bs.modal','#myModal',function(){
//     console.log('hidden');
// })
var modalObj={};
$('body').on('loaded.bs.modal','#myModal',function(){

    var before= '<div class="modal-header">'
            +'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
            // +'<h4 class="'+modalObj.title+'" id="myModalLabel">Modal title</h4>'
            +'<h4 class="modal-title" id="myModalLabel">'+modalObj.title+'</h4>'
          +'</div>';
    var after=  '<div class="modal-footer">'
            +'<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'
          +'</div>';

    $('.modal-div').removeClass('hide');
    // console.log(before);
    // console.log(after);
    // console.log($('.modal-div .modal-content'));
    $('.modal-div .modal-content').prepend(before).append(after);
   
})


function modal(obj,title='Modal title',content='',type='string'){
    $('.modal-div').remove();
    var hide='';
    var url='';
    if(type=='url'){
        hide='hide';
        url='href="'+content+'"';
        modalObj.title=title;
    }
    var html=''
    +'<div class="modal-div '+hide+'">'
        +'<button type="button" data-toggle="modal" data-target="#myModal" class="hide" '+url+' ></button>'
        +'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'
          +'<div class="modal-dialog" role="document">'
            +'<div class="modal-content">'
              +'<div class="modal-header">'
                +'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                +'<h4 class="modal-title" id="myModalLabel">'+title+'</h4>'
              +'</div>'
              +'<div class="modal-body">'
                +'...'
              +'</div>'
              +'<div class="modal-footer">'
                +'<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'
                // +'<button type="button" class="btn btn-primary">Save changes</button>'
              +'</div>'
            +'</div>'
          +'</div>'
        +'</div>'
    +'</div>';
    $('body').append(html);

    $('.modal-div button:first').click();

}


function smallModal(title='title',content='...'){
    $('.modal-div').remove();
    var html=""

    +'<div class="modal-div">'
        +'<button type="button" class="hide btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>'
        +'<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">'
          +'<div class="modal-dialog modal-sm" role="document">'
            +'<div class="modal-content">'
                +'<div class="modal-header">'
                    +'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    +'<h4 class="modal-title" id="myModalLabel">'+title+'</h4>'
                +'</div>'
                 +'<div class="modal-body">'
                    +content
                +'</div>'
                +'<div class="modal-footer">'
                    +'<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'
                    // +'<button type="button" class="btn btn-primary">Save changes</button>'
                +'</div>'
            +'</div>'
          +'</div>'
        +'</div>';

    +'<div class="modal-div">'

    $('body').append(html);



    //把弹框加载可是区域中间
    var height=$(window).height();

    var divHeight=$('.modal-dialog').height();

    if((height-divHeight)>0){
        var top=parseInt((height-divHeight-340)/2);
        $('.modal-dialog').css({'marginTop':top});
    }
    


    $('.modal-div button:first').click();
}


function modalimg(obj,title='Modal title',url=''){
    $('.modal-div').remove();
    var hide='';
  
    var id=obj.attr('id');
    var html=''
    +'<div class="modal-div '+hide+'">'
        +'<button type="button" data-toggle="modal" data-target="#myModal" class="hide" '+url+' ></button>'
        +'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'
          +'<div class="modal-dialog" role="document">'
            +'<div class="modal-content">'
              +'<div class="modal-header">'
                +'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                +'<h4 class="modal-title" id="myModalLabel">'+title+'</h4>'
              +'</div>'
              +'<div class="modal-body" forid="'+id+'">'
                +'<iframe src="'+url+'" style="width: 100%;border: 0px;"></iframe>'
              +'</div>'
              +'<div class="modal-footer">'
                +'<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'
                // +'<button type="button" class="btn btn-primary">Save changes</button>'
              +'</div>'
            +'</div>'
          +'</div>'
        +'</div>'
    +'</div>';
    $('body').append(html);

    $('.modal-div button:first').click();


}
