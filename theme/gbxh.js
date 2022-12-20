// 开始 PJAX 执行的函数
document.addEventListener('pjax:send', function (){
    ks.select("loader").classList.add("active");
});
var pjax = new Pjax({
  // 在页面进行 PJAX 时需要被替换的元素或容器，一条一个 CSS 选择器，数组形式
  selectors: [
    "title",
    "main",
  ],
  cacheBust: false
})
// PJAX 完成之后执行的函数，可以和上面的重载放在一起
document.addEventListener('pjax:complete', function (){
    ks.select("loader").classList.add("active");
});