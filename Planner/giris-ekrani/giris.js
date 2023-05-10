var myArray = ["Bugün yapacaklarınız, yarının belirlenmesindeki en önemli faktörlerdir.",
  "Başarılı olmak için çalışmalısınız, başarılı olmayı bekleyemezsiniz.",
  "Bir şeyi yapmak için nedeniniz ne kadar büyükse, başarınız da o kadar büyük olacaktır.",
  "Başarı, her gün biraz daha ileri gitmekle elde edilir.",
  "Kendinizi başkalarıyla karşılaştırmak yerine, sadece kendinizle yarışın ve daha iyi bir versiyonunu oluşturun.",
  "Ders çalışmak zor olsa da, başarıya giden yolu açar.",
  "Azimli olun ve sonunda hedefinize ulaşacaksınız.",
  "Biraz çaba ve disiplin ile başaramayacağınız hiçbir şey yoktur.",
  "Başarılı olmak için motivasyonunuzu kaybetmeyin, hedefinize doğru emin adımlarla ilerleyin.",
  "Unutmayın, küçük adımlar bile büyük başarıların yolunu açabilir."];

  var x = Math.floor(Math.random() * 10);

  document.getElementById("motivasyonSozu").innerHTML = '"'+myArray[x]+'"';

    // Kayit Olma Background Formu //

function kayitOlBackgroundPopUp()
{
    var kayitOlBackgroundFormu = document.getElementById("kayit-ol-background-formu");
    kayitOlBackgroundFormu.style.display = "flex";
}
function kayitOlBackgroundPopUpKapat()
{
    var kayitOlBackgroundFormu = document.getElementById("kayit-ol-background-formu");
    kayitOlBackgroundFormu.style.display = "none";
}


    // Kayit Olma Formu //

function kayitOlPopUp() {
  var kayitOlFormu = document.getElementById("kayit-ol-formu");
  kayitOlFormu.style.display = "flex";
}

function kayitOlPopUpKapat() {
  var kayitOlFormu = document.getElementById("kayit-ol-formu");
  kayitOlFormu.style.display = "none";
}


    //Giris Yapma Formu //

function girisYapPopUp() {
  var girisYapFormu = document.getElementById("giris-yap-formu");
  girisYapFormu.style.display="flex";
}
function girisYapPopUpKapat()
{
  var girisYapFormu = document.getElementById("giris-yap-formu");
  girisYapFormu.style.display= "none";
}


    //Form Kapatma //
  window.onclick = function(event)
  {
      var kayitOlBackgroundFormu = document.getElementById("kayit-ol-background-formu");
      if (event.target == kayitOlBackgroundFormu) {
          kayitOlBackgroundPopUpKapat();
          kayitOlPopUpKapat();
          girisYapPopUpKapat();
        }
  }


  // Button //

  function anaSayfaGit()
  {
    window.location.href = '../ana-ekran/ana-ekran.html';
  }