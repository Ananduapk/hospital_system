const months = [
    { 'id': 1, 'name': 'Jan' },
    { 'id': 2, 'name': 'Feb' },
    { 'id': 3, 'name': 'Mar' },
    { 'id': 4, 'name': 'Apr' },
    { 'id': 5, 'name': 'May' },
    { 'id': 6, 'name': 'Jun' },
    { 'id': 7, 'name': 'Jul' },
    { 'id': 8, 'name': 'Aug' },
    { 'id': 9, 'name': 'Sep' },
    { 'id': 10, 'name': 'Oct' },
    { 'id': 11, 'name': 'Nov' },
    { 'id': 12, 'name': 'Dec' },
];

var currentDate = new Date();
var currentYear = currentDate.getFullYear();
var currentMonth = currentDate.getMonth() + 1;
var currentDay = currentDate.getDate();

function letsCheck(year, month) {
    var daysInMonth = new Date(year, month, 0).getDate();
    var firstDay = new Date(year, month - 1, 1).getDay();
    var array = {
        daysInMonth: daysInMonth,
        firstDay: firstDay
    };
    return array;
}

function makeCalendar(year, month) {
    var getCheck = letsCheck(year, month);
    $('#calendarList').empty();
    for (let i = 1; i <= getCheck.daysInMonth; i++) {
        var liClass = (i === currentDay && month === currentMonth && year === currentYear) ? 'today' : '';
        var div = '<li id="' + i + '" class="' + liClass + '">' + i + '</li>';
        $('#calendarList').append(div);
    }
    monthName = months.find(x => x.id === month).name;
    $('#yearMonth').text(year + ' ' + monthName);
}

makeCalendar(currentYear, currentMonth);

function nextMonth() {
    currentMonth++;
    if (currentMonth > 12) {
        currentYear++;
        currentMonth = 1;
    }
    makeCalendar(currentYear, currentMonth);
}

function prevMonth() {
    currentMonth--;
    if (currentMonth < 1) {
        currentYear--;
        currentMonth = 12;
    }
    makeCalendar(currentYear, currentMonth);
}
