function checkVersion(version){
  var url = '#';
  $.getScript(url, function(){
    if(vdsUpgrade.status == 1){
      var text = "有新的版本, 请您考虑是否升级, 最新的版本号是 "+vdsUpgrade.latest+" 于 "+vdsUpgrade.release+" 发布</p>";
      $('#notice').append("<p class='item'>"+text+"</p>").show();
    }
  });
}

function checkNotice(){
  var url = '#';
  $.getScript(url, function(){
    if(vdsNotice.status == 1){
      $('#notice').append("<p class='item'>"+vdsNotice.content+"</p>").show();
    }
  });
}