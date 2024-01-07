document.addEventListener('DOMContentLoaded', function () {
    const colorChangeButton = document.getElementById('colorChangeButton');
    const demoText = document.getElementById('demoText');
  
    colorChangeButton.addEventListener('click', function () {
      const randomColor = getColor();
      demoText.style.color = randomColor;
    });

    function getColor() {
      const colorCodes = ["#FF5733", "#3399FF", "#33FF57", "#9966CC", "#FFD700", "#FF6347", "#00CED1", "#FF00FF", "#8A2BE2", "#00FF7F"];
      const randomIndex= Math.floor(Math.random() * colorCodes.length);
      return colorCodes[randomIndex];

    }
  });
  