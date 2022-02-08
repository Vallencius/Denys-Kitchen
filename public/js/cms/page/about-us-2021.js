    var findex = 7;
    var jagat1 = 1;
    var jagat2 = 7;
    var anta1 = 7;
    var anta2 = 13;
    var arto1 = 13;
    var arto2 = 20;
    var bacarita1 = 20;
    var bacarita2 = 29;
    var gantar1 = 29;
    var gantar2 = 41;
    var genta1 = 41;
    var genta2 = 55;
    var lawang1 = 55;
    var lawang2 = 64;
    var liku1 = 64;
    var liku2 = 73;
    var lua1 = 73;
    var lua2 = 77;
    var orta1 = 77;
    var orta2 = 84;
    
    $(`.slider-item:nth-child(${findex})`).css("transform", 'scale(1.1,1.1)');
    $(`.content-temaKonsep`).fadeIn("slow");

    var cur1 = 0;
    var cur2 = 0;
    var temaOn = 1;

    $('.slider-item').click(function() {
        var index = $(this).index() + 1;
        //Kalau logo yg di klik sama, abaikan
        if(findex == index){
            return;
        }

        //Kecilin logo yg sebelumnya, besarin logo yg baru
        $(`.slider-item:nth-child(${index})`).css("transform", 'scale(1.1,1.1)');
        $(`.slider-item:nth-child(${findex})`).css("transform", 'scale(1,1)');

        //hilangin konten sebelumnya
        for(var i = cur1; i<cur2; i++){
            $(`.content-selector:nth-child(${i})`).fadeOut("slow");
        }

        //Kalau sebelumnya ada di page tema, matiin
        if(temaOn){
            $(`.content-temaKonsep`).fadeOut("slow");
            temaOn = 0;
        }

        //Tampilin konten baru & ubah background berdasarkan index
        switch(index-1){
            case(1):
                $('.main').css("background-image", 'linear-gradient(to bottom right, #920F28, #FFFFFF)');
                for(var i = anta1; i<anta2; i++){
                    $(`.content-selector:nth-child(${i})`).fadeIn("slow");
                }
                cur1 = anta1;
                cur2 = anta2;
                break;
            case(2):
                $('.main').css("background-image", 'linear-gradient(to bottom right, #3D6C13, #FFFFFF)');
                for(var i = arto1; i<arto2; i++){
                    $(`.content-selector:nth-child(${i})`).fadeIn("slow");
                }
                cur1 = arto1;
                cur2 = arto2;
                break;
            case(3):
                $('.main').css("background-image", 'linear-gradient(to bottom right, #202020, #FFFFFF)');
                for(var i = bacarita1; i<bacarita2; i++){
                    $(`.content-selector:nth-child(${i})`).fadeIn("slow");
                }
                cur1 = bacarita1;
                cur2 = bacarita2;
                break;
            case(4):
                $('.main').css("background-image", 'linear-gradient(to bottom right, #4F4F4F, #FFFFFF)');
                for(var i = gantar1; i<gantar2; i++){
                    $(`.content-selector:nth-child(${i})`).fadeIn("slow");
                }
                cur1 = gantar1;
                cur2 = gantar2;
                break;
            case(5):
                $('.main').css("background-image", 'linear-gradient(to bottom right, #E5A10D, #FFFFFF)');
                for(var i = genta1; i<genta2; i++){
                    $(`.content-selector:nth-child(${i})`).fadeIn("slow");
                }
                cur1 = genta1;
                cur2 = genta2;
                break;
            case(6):
                $('.main').css("background-image", 'linear-gradient(to bottom right, #037c3bfd, #FFFFFF)');
                $(`.content-temaKonsep`).fadeIn("slow");
                temaOn = 1;
                break;
            case(7):
                $('.main').css("background-image", 'linear-gradient(to bottom right, #364B82, #FFFFFF)');
                for(var i = jagat1; i<jagat2; i++){
                    $(`.content-selector:nth-child(${i})`).fadeIn("slow");
                }
                cur1 = jagat1;
                cur2 = jagat2;
                break;
            case(8):
                $('.main').css("background-image", 'linear-gradient(to bottom right, #532700, #FFFFFF)');
                for(var i = lawang1; i<lawang2; i++){
                    $(`.content-selector:nth-child(${i})`).fadeIn("slow");
                }
                cur1 = lawang1;
                cur2 = lawang2;
                break;
            case(9):
                $('.main').css("background-image", 'linear-gradient(to bottom right, #DE3573, #FFFFFF)');
                for(var i = liku1; i<liku2; i++){
                    $(`.content-selector:nth-child(${i})`).fadeIn("slow");
                }
                cur1 = liku1;
                cur2 = liku2;
                break;
            case(10):
                $('.main').css("background-image", 'linear-gradient(to bottom right, #5652CA, #FFFFFF)');
                for(var i = lua1; i<lua2; i++){
                    $(`.content-selector:nth-child(${i})`).fadeIn("slow");
                }
                cur1 = lua1;
                cur2 = lua2;
                break;
            case(11):
                $('.main').css("background-image", 'linear-gradient(to bottom right, #FF784B, #FFFFFF)');
                for(var i = orta1; i<orta2; i++){
                    $(`.content-selector:nth-child(${i})`).fadeIn("slow");
                }
                cur1 = orta1;
                cur2 = orta2;
                break;
        }
        
        //index yg sekarang disimpan di findex
        findex = index;
    });