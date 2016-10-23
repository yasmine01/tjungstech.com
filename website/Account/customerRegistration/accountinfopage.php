<style>
    .box {

        height: 40px;
        overflow: hidden;
        border-radius: 3px;


    }
    .inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
    .img-thumbnail
    {

        border: dashed 2px #a7a7a7;;
    }

    .action
    {
        width: 400px;
        height: 30px;
        margin: 10px 0;
    }
    .cropped>img
    {
        margin-right: 10px;
    }
    .imageBox
    {

        border: 1px dashed #a7a7a7;
        position: relative;
        height: 400px;

        border:1px solid #aaa;
        background: #fff;
        overflow: hidden;
        background-repeat: no-repeat;
        cursor:move;
    }

    .imageBox .thumbBox
    {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 200px;
        height: 200px;
        margin-top: -100px;
        margin-left: -100px;
        box-sizing: border-box;
        border: 1px solid rgb(102, 102, 102);
        box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.5);
        background: none repeat scroll 0% 0% transparent;
    }

    .imageBox .spinner
    {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        text-align: center;
        line-height: 400px;
        background: rgba(0,0,0,0.7);
    }
</style>

<div class="modal fade" id="uploadimage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Upload Profile Picture</h4>
            </div>
            <div class="modal-body">
                    <div class="imageBox"  style="border: 1px dashed;">
                        <div class="thumbBox"></div>
                        <div class="spinner" style="display: none">Loading...</div>
                    </div>
                    <div class="action">
                        <input type="button" class="btn btn-default" id="btnZoomOut" value="-" style="float: left">
                        <input type="button" class="btn btn-default" id="btnZoomIn" value="+" style="float: left">
                    </div>
                    <div class="cropped">
                    </div>
            </div>
            <div class="modal-footer">
                <div  style="float: right ; width:120px;">
                    <input type="file" onchange="readURL(this);" accept="image/*" name="file[]" id="file"  class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="">
                    <label class="btn btn-default" for="file"> <span style="color:black" >Upload Photo</span></label>
                </div><div class="">
                    <input type="button" name="btn_done" id="btn_done" value="Done"  class="btn btn-default" style=" color:black" data-dismiss="modal">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-1"  >
    <img data-toggle="modal"  data-target="#uploadimage" id="selectImage" name="selectImage" style="margin-bottom: 12px; width: 150px; height: 150px" src="" class="img-responsive img-thumbnail">
</div>
<div class="form-horizontal form-label-left">
    <div   class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">
            Username <span>*</span>
        </label>
        <div class="col-md-6 colsm-6 col-xs-12">
            <input type="text" class="form-control col-md-7 col-xs-12 " readonly="readonly" id="txt_username" name="txt_username">
        </div>
    </div>
    <div style="margin-top:-40px;" class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">
            Password <span>*</span>
        </label>
        <div class="col-md-6 colsm-6 col-xs-12">
            <input type="password" class="form-control col-md-7 col-xs-12" id="txt_password" name="txt_password">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="confirmpassword">
            Confirm Password <span>*</span>
        </label>
        <div class="col-md-6 colsm-6 col-xs-12">
            <input type="password" class="form-control col-md-7 col-xs-12" id="txt_cpassword" name="txt_cpassword">
        </div>
        <!--        <div class="col-md-3 col-sm-3 col-xs-12">-->
        <!--            <label style="margin-top:10px ; font-size: 10px ; color: red" id="txt_password">this field is required</label>-->
        <!--        </div>-->
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deviceid">
            Device ID <span>*</span>
        </label>
        <div class="col-md-6 colsm-6 col-xs-12">
            <input type="number" class="form-control col-md-7 col-xs-12" id="txt_deviceid" name="txt_deviceid">
        </div>
        <!--        <div class="col-md-3 col-sm-3 col-xs-12">-->
        <!--            <label style="margin-top:10px ; font-size: 10px ; color: red" id="txt_password">this field is required</label>-->
        <!--        </div>-->
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deviceid">
            Buy from<span>*</span>
        </label>
        <div class="col-md-6 colsm-6 col-xs-12 ">
            <select class="form-control col-md-7 col-xs-12 ">
                <option>Name of Dealer</option>
                <option>Name of Dealer1</option>
                <option>Name of Dealer2</option>
            </select>
        </div>
        <!--        <div class="col-md-3 col-sm-3 col-xs-12">-->
        <!--            <label style="margin-top:10px ; font-size: 10px ; color: red" id="txt_password">this field is required</label>-->
        <!--        </div>-->
    </div>
</div>
<script type="text/javascript">
    var cropbox = function(options){
        var el = document.querySelector(options.imageBox),
            obj =
            {
                state : {},
                ratio : 1,
                options : options,
                imageBox : el,
                thumbBox : el.querySelector(options.thumbBox),
                spinner : el.querySelector(options.spinner),
                image : new Image(),
                getDataURL: function ()
                {
                    var width = this.thumbBox.clientWidth,
                        height = this.thumbBox.clientHeight,
                        canvas = document.createElement("canvas"),
                        dim = el.style.backgroundPosition.split(' '),
                        size = el.style.backgroundSize.split(' '),
                        dx = parseInt(dim[0]) - el.clientWidth/2 + width/2,
                        dy = parseInt(dim[1]) - el.clientHeight/2 + height/2,
                        dw = parseInt(size[0]),
                        dh = parseInt(size[1]),
                        sh = parseInt(this.image.height),
                        sw = parseInt(this.image.width);

                    canvas.width = width;
                    canvas.height = height;
                    var context = canvas.getContext("2d");
                    context.drawImage(this.image, 0, 0, sw, sh, dx, dy, dw, dh);
                    var imageData = canvas.toDataURL('image/png');
                    return imageData;
                },
                getBlob: function()
                {
                    var imageData = this.getDataURL();
                    var b64 = imageData.replace('data:image/png;base64,','');
                    var binary = atob(b64);
                    var array = [];
                    for (var i = 0; i < binary.length; i++) {
                        array.push(binary.charCodeAt(i));
                    }
                    return  new Blob([new Uint8Array(array)], {type: 'image/png'});
                },
                zoomIn: function ()
                {
                    this.ratio*=1.1;
                    setBackground();
                },
                zoomOut: function ()
                {
                    this.ratio*=0.9;
                    setBackground();
                }
            },
            attachEvent = function(node, event, cb)
            {
                if (node.attachEvent)
                    node.attachEvent('on'+event, cb);
                else if (node.addEventListener)
                    node.addEventListener(event, cb);
            },
            detachEvent = function(node, event, cb)
            {
                if(node.detachEvent) {
                    node.detachEvent('on'+event, cb);
                }
                else if(node.removeEventListener) {
                    node.removeEventListener(event, render);
                }
            },
            stopEvent = function (e) {
                if(window.event) e.cancelBubble = true;
                else e.stopImmediatePropagation();
            },
            setBackground = function()
            {
                var w =  parseInt(obj.image.width)*obj.ratio;
                var h =  parseInt(obj.image.height)*obj.ratio;

                var pw = (el.clientWidth - w) / 2;
                var ph = (el.clientHeight - h) / 2;

                el.setAttribute('style',
                    'background-image: url(' + obj.image.src + '); ' +
                    'background-size: ' + w +'px ' + h + 'px; ' +
                    'background-position: ' + pw + 'px ' + ph + 'px; ' +
                    'background-repeat: no-repeat');
            },
            imgMouseDown = function(e)
            {
                stopEvent(e);

                obj.state.dragable = true;
                obj.state.mouseX = e.clientX;
                obj.state.mouseY = e.clientY;
            },
            imgMouseMove = function(e)
            {
                stopEvent(e);

                if (obj.state.dragable)
                {
                    var x = e.clientX - obj.state.mouseX;
                    var y = e.clientY - obj.state.mouseY;

                    var bg = el.style.backgroundPosition.split(' ');

                    var bgX = x + parseInt(bg[0]);
                    var bgY = y + parseInt(bg[1]);

                    el.style.backgroundPosition = bgX +'px ' + bgY + 'px';

                    obj.state.mouseX = e.clientX;
                    obj.state.mouseY = e.clientY;
                }
            },
            imgMouseUp = function(e)
            {
                stopEvent(e);
                obj.state.dragable = false;
            },
            zoomImage = function(e)
            {
                var evt=window.event || e;
                var delta=evt.detail? evt.detail*(-120) : evt.wheelDelta;
                delta > -120 ? obj.ratio*=1.1 : obj.ratio*=0.9;
                setBackground();
            }

        obj.spinner.style.display = 'block';
        obj.image.onload = function() {
            obj.spinner.style.display = 'none';
            setBackground();

            attachEvent(el, 'mousedown', imgMouseDown);
            attachEvent(el, 'mousemove', imgMouseMove);
            attachEvent(document.body, 'mouseup', imgMouseUp);
            var mousewheel = (/Firefox/i.test(navigator.userAgent))? 'DOMMouseScroll' : 'mousewheel';
            attachEvent(el, mousewheel, zoomImage);
        };
        obj.image.src = options.imgSrc;
        attachEvent(el, 'DOMNodeRemoved', function(){detachEvent(document.body, 'DOMNodeRemoved', imgMouseUp)});

        return obj;
    };

</script>