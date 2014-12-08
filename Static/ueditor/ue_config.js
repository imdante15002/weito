window.UEDITOR_HOME_URL='/Static/ueditor/';
    window.onload=function(){
        window.UEDITOR_CONFIG.initialFrameWidth=1000; 
        window.UEDITOR_CONFIG.initialFrameHeight=380;
        UE.getEditor('Content',{
            toolbars:[['source','bold','underline','forecolor','fontsize','fontfamily','insertorderedlist','justifyleft','justifycenter','justifyright','link','unlink','simpleupload','insertimage','emotion','insertvideo','inserttable','mergecells','removeformat']]
        });
    }