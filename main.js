 const collection = document.getElementsByClassName("card mb-3 newscard");
    console.log(collection)
    collection[2].style.display = "none";
    collection[3].style.display = "none";
    collection[4].style.display = "none";
    collection[5].style.display = "none";

document.getElementById("load_more").addEventListener("click", loadMoreNews);

var count = 0;

  function loadMoreNews() {
      switch(count) {
          case 0:
              collection[2].style.display = "block";
              collection[3].style.display = "block";
          // code block
          break;
          case 1:
            collection[4].style.display = "block";
            collection[5].style.display = "block";
            document.getElementById("load_more").remove()
          // code block
          break;
          default:
          // code block
      }
      count++
  }


