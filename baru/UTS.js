function triangleNumber(num) {
    for(var i = num; i >= 1 ; i--){
        var str = ''
        for(var j = i; j >= 1; j--){
           str += j
        }
        console.log(str)
    }

 //DRIVER CODE
 console.log(triangleNumber(5));
 // 54321
 // 4321
 // 321
 // 21
 // 1