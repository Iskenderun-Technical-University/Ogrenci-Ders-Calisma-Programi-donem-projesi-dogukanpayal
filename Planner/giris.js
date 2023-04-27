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
  const registerLogin=document.getElementById("registerLogin")
    function closeRegisterLogin()
    {
        registerLogin.classList.add("kapali");
    }
    


