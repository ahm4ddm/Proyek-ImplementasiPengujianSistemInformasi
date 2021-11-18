$( function ()
{
  let o = new Howl(
    {
      src: [ "assets/audio/Sound1.mp3" ],
      loop: !0,
      html5: !0
    } ),
    t = new Howl(
    {
      src: [ "assets/audio/Sound2.mp3" ],
      loop: !0,
      html5: !0
    } ),
    s = new Howl(
    {
      src: [ "assets/audio/Sound3.mp3" ],
      loop: !0,
      html5: !0
    } ),
    p = new Howl(
    {
      src: [ "assets/audio/Sound4.mp3" ],
      loop: !0,
      html5: !0
    } ),
    l = new Howl(
    {
      src: [ "assets/audio/Sound5.mp3" ],
      loop: !0,
      html5: !0
    } );
  $( "#howler-play1" ).on( "change", function ()
  {
    o.stop(), t.stop(), s.stop(), p.stop(), l.stop(), o.play(),
    $("#howler-stop").attr('class', 'fas fa-music');
  } ), $( "#howler-play2" ).on( "click", function ()
  {
    o.stop(), t.stop(), s.stop(), p.stop(), l.stop(), t.play(),
    $("#howler-stop").attr('class', 'fas fa-music');
  } ), $( "#howler-play3" ).on( "click", function ()
  {
    o.stop(), t.stop(), s.stop(), p.stop(), l.stop(), s.play(),
    $("#howler-stop").attr('class', 'fas fa-music');
  } ), $( "#howler-play4" ).on( "click", function ()
  {
    o.stop(), t.stop(), s.stop(), p.stop(), l.stop(), p.play(),
    $("#howler-stop").attr('class', 'fas fa-music');
  } ), $( "#howler-play5" ).on( "click", function ()
  {
    o.stop(), t.stop(), s.stop(), p.stop(), l.stop(), l.play(),
    $("#howler-stop").attr('class', 'fas fa-music');
  } ), $( "#howler-stop" ).on( "click", function ()
  {
    o.stop(), t.stop(), s.stop(), p.stop(), l.stop(),
    $("#howler-stop").attr('class', 'fas fa-stop-circle');
  } )
} ), $(".music-now").click( function ()
{
    $("#dropdownMenuLink").html($(this).text());
} );