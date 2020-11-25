var canvas = document.getElementById("mastercard");
var context = canvas.getContext("2d");

context.save();
context.beginPath();
context.moveTo(44, 81.5 - 32.5);
context.bezierCurveTo(44 + (0.5522847498307936 * 32), 81.5 - 32.5,  44 + 32, 81.5 - (0.5522847498307936 * 32.5), 44 + 32, 81.5);
context.bezierCurveTo(44 + 32, 81.5 + (0.5522847498307936 * 32.5), 44 + (0.5522847498307936 * 32), 81.5 + 32.5, 44, 81.5 + 32.5);
context.bezierCurveTo(44 - (0.5522847498307936 * 32), 81.5 + 32.5, 44 - 32, 81.5 + (0.5522847498307936 * 32.5), 44 - 32, 81.5);
context.bezierCurveTo(44 - 32, 81.5 - (0.5522847498307936 * 32.5), 44 - (0.5522847498307936 * 32), 81.5 - 32.5, 44, 81.5 - 32.5);
context.fillStyle = "red";
context.fill();
context.closePath();

context.save();
context.beginPath();
context.moveTo(90, 81.5 - 32.5);
context.bezierCurveTo(90 + (0.5522847498307936 * 32), 81.5 - 32.5,  90 + 32, 81.5 - (0.5522847498307936 * 32.5), 90 + 32, 81.5);
context.bezierCurveTo(90 + 32, 81.5 + (0.5522847498307936 * 32.5), 90 + (0.5522847498307936 * 32), 81.5 + 32.5, 90, 81.5 + 32.5);
context.bezierCurveTo(90 - (0.5522847498307936 * 32), 81.5 + 32.5, 90 - 32, 81.5 + (0.5522847498307936 * 32.5), 90 - 32, 81.5);
context.bezierCurveTo(90 - 32, 81.5 - (0.5522847498307936 * 32.5), 90 - (0.5522847498307936 * 32), 81.5 - 32.5, 90, 81.5 - 32.5);
context.globalAlpha = 0.8;
context.fillStyle = "rgb(255, 204, 0)";
context.fill();
context.closePath();