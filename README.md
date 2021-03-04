# c1220i1-moudule2-hieu-reflection
<hr>
## reflection 4/3
chưa có gì trong mindmap ngày hôm nay<br>
còn về code em định nôp hôm nay thì một phần là em đang code theo bài thực hành mvc nên chưa có gì cả nên thôi ạ
<hr>
## reflection 1/3
đã dược viết trong mind map
<hr>
## reflection 24/2
đã được viết trong mindmap
<hr>
##reflection 23/2

đã được viết trong mindmap<br>
sự khác biệt giữa DBMS và RDBMS<br>
<table>
<tr>
<th>DBMS</th>
<th>RDBMS</th>
</tr>
<tr>
<td>DBMS Lưu trữ dữ liệu dưới dạng file</td>
<td>Được lưu trữ dưới dạng bảng</td>
</tr>

<tr>
<td>DL được lưu trữ duới dạng phân cấp và điều hướng</td>
<td>Bảng có một định danh goi là khóa chính và giá trị được lưu trữ dưới dạng bảng</td>
</tr>

<tr>
<td>Không có chuẩn hóa DL</td>
<td>có chuẩn hóa DL</td>
</tr>

<tr>
<td>Không có bảo vệ DL khi thực hiện các thao tác</td>
<td>Có ràng buôc toàn vẹn đảm bảo toàn vẹn DL khi thực hiện các thao tác DL như thêm sửa xóa...</td>
</tr>

<tr>
<td>Thường dùng trong DL nhỏ và khối lượng DL nhỏ</td>
<td>Hỗ trợ một cấu trúc bảng và quan hệ giữa chúng để truy cập vào thông tin lưu trữ</td>
</tr>

<tr>
<td>Cung cấp những phương thức thống nhất để truy cập vào thông tin được lưu trữ</td>
<td>Hỗ trợ CSDL phân tán</td>
</tr>

<tr>
<td>Không có hỗ trợ DL phân tán</td>
<td>hỗ trợ DL phân tán</td>
</tr>

<tr>
<td></td>
<td>Được thiết kế xử lý lượng DL lớn, hỗ trợ nhiều người dùng</td>
</tr>
</table>
<hr>

##reflection 17/2

đã được viết trong mindmap<br>
bài tập về nhà:
đã xong bài 1
nghĩ ra ideal của bài 2 nhưng chưa triển khai được
<hr>

##reflecton 4/2
mind map

<hr>

##reflection 3/2 
mind map
<hr>
## reflection 2/2
clean code là định nghĩa cho mã sạch
mã sạch là
<ul>
<li>mã dễ đọc</li>
<li>không có code trùng lặp</li>
<li>thể hiện được ý tưởng của thiết kế</li>
</ul>
ngược lại với nó là code smell(mã bẩn)<br>
- refactoring
<ul>
<li>cho phép chỉnh sửa mã nguồn mà không ảnh hưởng đến code</li>
<li>có một số kỹ thuật refactoring cơ bản như</li>
<ul>
<li>thay đổi tên biến</li>
<li>tách biến</li>
<li>tách hằng</li>
<li>tách phương thức</li>
</ul>
</ul>

<hr>
##reflection ngay 1/2
mindmap
<hr>
##reflection bai 5 29/1
<ol>
<li>từ khóa final</li> 
<ul>
<li>khi khai báo class có từ final thì lớp tiếp theo không thể kế thừa nó</li>
<li>khi khai báo phương thức có từ final thì không có 1 phương thức nào có thể override</li>
</ul>
<li>override và overload</li>
<ul>
<li>override</li>
- là hiện tượng xảy ra khi thuộc tính hoặc phương thức của class con trùng tên với thuộc tính hoặc phương thức của class cha
<br>- hậu quả: mát dữ liệu của lớp cha.
<br>-có thể tránh override bằng từ khóa parent hoặc final
<li>overload</li>
- là khả năng tạo nhiều phương thức có tên giống nhau với cách triển khai khác nhau
<br>-tất cả phương thức overload phải định nghĩa như là public.
</ul>
<li>contructor</li>
- dùng để tạo và khỏi tạo các trạng thái ban đầu của đối tượng.<br>
- có cho phép ghi đè constructor nhưng phải khác nhau về mặt tham số so với hàm tạo của lớp cha.<br>
- vì php sẽ không phát sinh lỗi.
<li>câu 4: khi có từ khóa final</li>
</ol>


<hr>

##reflection bai 4 28/1
<ul>
<li>Namespace (tên miền không gian) là một hình thức để đóng gói các hạng mục có liên quan lại với nhau</li>
<li>Trong PHP, namespace được thiết kế để giải quyết 2 vấn đề mà các tách giả của các thư viện và ứng dụng thường gặp phải khi cố gắng tạo ra các đối tượng hoặc hàm có thể tái sử dụng được</li>
<li>Các tên gọi bị trùng nhau giữa những lớp/hàm được tạo ra, so với các lớp/hàm có sẵn của PHP, hoặc các lớp/hàm do một người khác viết</li>
<li>Khả năng để rút ngắn tên gọi thông qua việc đặt các bí danh (alias) nhằm giữ cho mã nguồn ngắn gọn</li>
</ul>
PHP cũng là một ngôn ngữ lập trình nên nó cũng có cung cấp các thư viện xử lý JSON giúp lập trình viên giải quyết nó dễ dàng. Chúng ta có hai hàm đó là hàm json_decode và json_encode:
json_decode: Hàm này mục đích chuyển một chuỗi JSON sang dạng mảng hoặc object,hàm này có cú pháp như sau: json_decode($json_string, $assoc)
$json_string: là chuỗi JSON
$assoc có hai giá trị true / false. Nếu true thì kết quả nó trả về là dạng array, ngược lại nếu false thì kết quả trả về dạng object. Mặc định là false.
json_encode: Hàm sẽ chuyển một mảng trong PHP hoặc object trong PHP thành chuỗi JSON.

-Cách dùng Composer : Autoload (Tránh cho việc phải dùng nhiều lần câu lệnh include hay require trong một tập kỹ thuật clean code)
VD:require __DIR__ . '/vendor/autoload.php';
{
"autoload": {
"psr-4": {"Acme\\": "src/"}
}
}

##reflection ngày 27/1
Từ khoá class được sử dụng để khai báo lớp

Từ khoá new được sử dụng để khởi tạo đối tượng

Phương thức khởi tạo (constructor) là phương thức giúp khởi tạo các đốitượng

Các phương thức cho phép thay đổi giá trị của thuộc tính được gọi là setter, các phương thức cho phép lấy về giá trị của thuộc tính được gọi là getter

Access modifier là các từ khoá được sử dụng để quy định mức độ truy cập đến lớp và các thành phần của lớp

Các mức truy cập:
<ul>
<li>public: có thể truy cập từ bất cứ đâu</li>

<li>private: các phương thức và thuộc tính chỉ được phép truy xuất trong cùng một lớp</li>

<li>protected: các phương thức và thuộc tính được phép truy xuất trong cùng một lớp và ở các lớp con (kế thừa)</li>
</ul>

Từ khoá this được sử dụng để đại diện cho đối tượng hiện tại

Hàm tạo (constructor)
<ul>
<li>Dùng để tạo và khởi tạo các trạng thái ban đầu của đối tượng</li>

<li>Mặc định sẽ có một Hàm tạo không có đối số được thêm vào cho lớp</li>

<li>Có thể lựa chọn sử dụng các constructor khác nhau bằng cách truyền vào tham số khác nhau</li>
</ul>

__construct() vs __destruct()
<ul>
<li>Để can thiệp vào quá trình khởi tạo đối tượng, chúng ta sử dụng hàm __construct()</li>

<li>Để can thiệp vào quá trình huỷ đối tượng, chúng ta sử dụng hàm __destruct()</li>
</ul>

##reflection 26/1
- reflection bài 2 mind map
- cách duyệt mảng liên kết dùng vòng lặp foreach
- required và include giông nhau đều là nhúng file php
<ul>
<li>khác là nếu có lỗi ở required sẽ hiện thông báo và kết thúc chương trình</li>
<li>tương tự với include chỉ khác là chương trình vẫn tiếp tục chạy</li>
</ul>

##Reflection 25/1
sylabuss
<p>3 điều học đọc <br>
<ul>
<li>là một từ được sử dụng rất phổ biến trong cuộc sống</li>
<li>được dùng nhiều trong giáo dục</li>
<li>được dùng để tóm tắt những điểm chính của bài học</li>
</ul></p>
<p>2 ví dụ <br>
<ul>
<li>the syllabus content(nội dung giáo trình )</li>
<li>the math syllabus (giáo trình toán )</li>
</ul></p>
<p>1 điều chưa rõ<br>
chưa có</p>
