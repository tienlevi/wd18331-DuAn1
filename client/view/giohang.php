<div class="shopping-cart">
    <div class="inner-cart">
        <div class="item">
            <div class="cart-block">
                <h1>Giỏ hàng</h1>
            </div>
            <?php 
            $i = 0;
             foreach ($_SESSION['mycart'] as $cart) {
                $image = '../Img/'.$cart[2].'';
                $xoa = 'index.php?act=deletecart&id='.$i.'';
                echo '<div class="inner-item">
                <div class="inner-item-name">
                    <img src="'.$image.'" alt=""/>
                    <div class="inner-item-name-price">
                    <h2>'.$cart[1].'</h2>
                    <p>Giá: '.$cart[3].'đ</p>
                    </div>
                </div>
                <h2>Số lượng:
                <div class="quantity-cart">
                    <button class="quantity-cart-btn decrease">-</button>
                    <input type="number" name="soluong" class="count" value="1">
                    <button class="quantity-cart-btn increase">+</button>
                </div>
            </h2>
                <a href='.$xoa.'><i class="fa-solid fa-trash"></i></a>
            </div>';
            $i += 1;
            } ?>
        </div>
        <div class="total">
            <div class="total-block">
                <?php 
                $tong = 0;
                foreach ($_SESSION['mycart'] as $cart) { 
                $tong += $cart[4];
            }
            $count = count($_SESSION['mycart']);
                echo '<p>x'.$count.' Số lượng</p>
                <p>'.$tong.'đ</p>';
                 ?>
            </div>
            <div class="total-block">
                <p>Phí vận chuyển</p>
                <p>0đ</p>
            </div>
            <div class="total-block">
                <?php 
                $tong = 0;
                foreach ($_SESSION['mycart'] as $cart) { 
                $tong += $cart[4];
                }
                echo '<p>Tổng tiền</p>
                <p>'.$tong.'đ</p>';
                 ?>
            </div>
            <div class="total-buy">
                <a href="index.php?act=thanhtoan">Mua hàng</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>