// This script and many more are available free online at -->
// The JavaScript Source!! http://javascript.internet.com -->
// Begin

var fontface = "Comic Sans MS, cursive, sans-serif",
        fontsize = "9",
        fontcolor = "#333",
        monthsize = "11";
fontcolor2 = "#D67984";

monthnames = new Array(
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
        );

var linkcount = 0;

function addlink(month, day, href) {
    var entry = new Array(3);
    entry[0] = month;
    entry[1] = day;
    entry[2] = href;
    this[linkcount++] = entry;
}

Array.prototype.addlink = addlink;
linkdays = new Array();
monthdays = new Array(12);
monthdays[0] = 31;
monthdays[1] = 28;
monthdays[2] = 31;
monthdays[3] = 30;
monthdays[4] = 31;
monthdays[5] = 30;
monthdays[6] = 31;
monthdays[7] = 31;
monthdays[8] = 30;
monthdays[9] = 31;
monthdays[10] = 30;
monthdays[11] = 31;
todayDate = new Date();
thisday = todayDate.getDay();
thismonth = todayDate.getMonth();
thisdate = todayDate.getDate();
thisyear = todayDate.getYear();
thisyear = thisyear % 100;

thisyear = ((thisyear < 50) ? (2000 + thisyear) : (1900 + thisyear));
if (((thisyear % 4 == 0)
        && !(thisyear % 100 == 0))
        || (thisyear % 400 == 0))
    monthdays[1]++;
startspaces = thisdate;
while (startspaces > 7)
    startspaces -= 7;
startspaces = thisday - startspaces + 1;
if (startspaces < 0)
    startspaces += 7;
document.write("<table style='border:0;font-size:" + fontsize + "px; color:" + fontcolor + "; font-family:" + fontface + "' cellpadding='0' cellspacing='1'>");

document.write("<tr><td colspan='7' style='font-size:" + monthsize + "px; font-weight:bold; color:" + fontcolor2 + "; text-align:center;'>" + monthnames[thismonth] + "</td></tr>");
document.write("<tr>");
document.write("<td style='text-align:center;'>S</td>");
document.write("<td style='text-align:center;'>M</td>");
document.write("<td style='text-align:center;'>T</td>");
document.write("<td style='text-align:center;'>W</td>");
// This code has been found on the WWW
document.write("<td style='text-align:center;'>T</td>");
document.write("<td style='text-align:center;'>F</td>");
document.write("<td style='text-align:center;'>S</td>");
document.write("</tr>");
document.write("<tr>");
for (s = 0; s < startspaces; s++) {
    document.write("<td>&nbsp;</td>");
}

count = 1;
while (count <= monthdays[thismonth]) {
    for (b = startspaces; b < 7; b++) {
        document.write("<td style='text-align:center;'>");

        if (count == thisdate) {
            document.write("<strong style='color:" + fontcolor2 + ";'>");
        }
        if (count <= monthdays[thismonth]) {
            document.write(count);
        }
        else {
            document.write("");
        }
        if (count == thisdate) {
            document.write("</strong>");
        }
        document.write("</td>");
        count++;
    }
    document.write("</tr>");
    document.write("<tr>");
    startspaces = 0;

}
document.write("</table>");