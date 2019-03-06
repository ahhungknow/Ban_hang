<div class="header_tim_kiem">
Tìm kiếm
</div>
<div class="tim_kiem">
<form>
    <select id="gender" onchange="genderChanged(this)">
        <option value="tracking">Tìm đơn hàng</option>
        <option value="product">Tìm sản phẩm</option>
        <input type="hidden" name="thamso" value="tracking" />
    </select>
    <p style="color:red" id="showerror"></p>
    <div id="add"></div>
    <script language="javascript">
        function genderChanged(obj)
        {
            var message = document.getElementById('showerror');
            var addd= document.getElementById('add');
            var value = obj.value;
            if (value === 'product'){
                addd.innerHTML='<input type="hidden" name="thamso" value="product" />';
            }
            else if (value === 'tracking'){
                addd.innerHTML='<input type="hidden" name="thamso" value="tracking" />';
            }
        }
    </script>
        <input type="text" name="tu_khoa" value="" style="margin-top:10px;margin-bottom:10px;width:100px" >
        <input type="submit" value="Tìm" >
</form> 
</div>