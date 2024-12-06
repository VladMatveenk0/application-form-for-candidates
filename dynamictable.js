
var DynamicTable = (function (GLOB){
    var RID=0;
    return function(btn_add, btn_del, tBody){

        btn_add.onclick = function(e) {
            _addRow(tBody.rows[0], tBody);
        };

        btn_del.onclick = function(e) {
            tBody.rows.length > 1 && _delRow(tBody.rows[tBody.rows.length - 1], tBody);
        }

        var _correctNames = function (row) {
            var elements = row.getElementsByTagName("*");
            for (var i = 0; i < elements.length; i += 1) {
                if (elements.item(i).name) {
                    elements.item(i).name = RID + "["+ elements.item(i).name +"]";
                }
            }
            RID++;
            return row;        
        };
    
        var _rowTpl = tBody.rows[0].cloneNode(true);

        var _addRow = function (before, tBody) {
            var newNode = _correctNames(_rowTpl.cloneNode(true));
            tBody.insertBefore(newNode, before.nextSibling);
        };
        var _delRow = function (row, tBody) {
            tBody.removeChild(row);
        };
        _correctNames(tBody.rows[0]);
    }
})(this);