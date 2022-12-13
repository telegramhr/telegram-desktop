$(document.body).click(function() {

  var sentenceArray = [
		"Thou shalt have no other gods before Me.",
		"Thou shalt not make idols.",
		"Thou shalt not take the name of the LORD thy God in vain.",
		"Remember the Sabbath day, to keep it holy.",
		"Honor thy father and thy mother.",
		"Thou shalt not murder.",
		"Thou shalt not commit adultery.",
		"Thou shalt not steal.",
		"Thou shalt not bear false witness against thy neighbor.",
		"Thou shalt not covet thy neighbour’s wife, thou shalt not covet thy neighbour’s house ."
		],

  randSentence = sentenceArray[Math.floor(Math.random() * sentenceArray.length)];
  document.getElementById("wellSentence").textContent = randSentence;
  if (typeof prevSentence == "undefined") {
        newSentence = randSentence;
      } else {
        newSentence = randSentence;
        if (newSentence == prevSentence) randomNum += 1;
      };
  });