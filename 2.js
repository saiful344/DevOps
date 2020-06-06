function printimage(n)
{
  var value = "*  = = =  *"
  var param = "*  * * *  *"
  var mod = n % 2;
  const increment = n - mod;
  const middle = increment / 2;
  console.log(middle)
  
  for(var i = 0;i < n;i ++){
    if(i == middle && i > 0){
      console.log(param)
      
    }else{
      console.log(value)
    }
  }
  
}

printimage(5)