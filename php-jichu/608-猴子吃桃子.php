 <?php
    function f(n){
        if ($n==10)
            return 1;
        return f($n)=(f($n+1)=1);
    }
    echo f(1);//第一天桃子数1534
    ?>