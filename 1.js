function divideandsort(data){
  const slice = (data+'').split('').map((i) => {return Number(i);})
  const finishresult = [];
  var sortdb = [];
  slice.forEach(function(value){
    if(value != 0){
  		sortdb.push(value)
      	sortdb.sort(function(a, b){return a-b})
    }else{
      finishresult.push(...sortdb)
      sortdb.length = 0
    }
    
  })
  return finishresult;
  
}
console.log(divideandsort(5956560159466))