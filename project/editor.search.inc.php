<section id="section">
    <div class="left border-right">
        <aside id="aside">
            <div style="height: 40px;"></div>
            <div id="picNav"></div>
            <nav id="sideNav" class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/project/1/ideology.php" id="navCompany">‧ 회사소개</a>
                        <div class="dropdown-menu" id="dropCompany">
                            <a class="dropdown-item" href="/project/1/ideology.php">‧ 경영이념</a>
                            <a class="dropdown-item" href="/project/1/vision.php">‧ 경영비젼</a>
                            <a class="dropdown-item" href="/project/1/history.php">‧ 연혁</a>
                            <a class="dropdown-item" href="/project/1/plan.php">‧ 사업계획</a>
                            <a class="dropdown-item" href="/project/1/strategy.php">‧ 그린만의 전략</a>
                            <a class="dropdown-item" href="/project/1/news.php">‧ 그린소식</a>
                        </div> 
                    </li><!-- /회사소개 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/project/2/operation.php" id="navInvest">‧ 투자정보</a>
                        <div class="dropdown-menu" id="dropInvest">
                            <a class="dropdown-item" href="/project/2/operation.php">‧ 경영정보</a>
                            <a class="dropdown-item" href="/project/2/finance.php">‧ 재무정보</a>
                        </div>
                    </li><!-- /투자정보 -->
                    <li class="nav-item dropdown">
                    <a class="nav-link" href="/project/3/furniture.php" id="navOrder">‧ 가구주문</a>
                        <div class="dropdown-menu" id="dropOrder">
                            <a class="dropdown-item" href="/project/3/furniture.php">‧ 그린의 가구</a>
                            <a class="dropdown-item" href="/project/3/production_process.php">‧ 제작과정</a>
                            <a class="dropdown-item" href="/project/3/delivery.php">‧ 배송과정</a>
                            <a class="dropdown-item" href="/project/3/editor.order_inquiry.php">‧ 주문문의</a>
                            <a class="dropdown-item" href="/project/3/editor.customer_consultation.php">‧ 고객상담</a>
                            <a class="dropdown-item" href="/project/3/editor.a_s.php">‧ A/S 접수</a>
                            <a class="dropdown-item" href="/project/3/serviceCenter.php">‧ 서비스센터</a>
                        </div>
                    </li><!-- /가구주문 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/project/4/notice.php" id="navCommunity">‧ 커뮤니티</a>
                        <div class="dropdown-menu" href="/project/4/editor.notice.php" id="dropCommunity">
                            <a class="dropdown-item" href="/project/4/editor.notice.php">‧ 공지사항</a>
                            <a class="dropdown-item" href="/project/4/editor.customer_reviews.php">‧ 고객후기</a>
                            <a class="dropdown-item" href="/project/4/payment.php">‧ 개인결제창</a>
                            <a class="dropdown-item" href="/project/4/map.php">‧ 찾아오시는 길</a>
                        </div>
                    </li><!-- /커뮤니티 -->
                </ul>
            </nav>
            <div id="familySite">
                <div>~&nbsp;&nbsp;family site&nbsp;&nbsp;~</div>
                <div><a href="">‧ 그린몰</a></div>
                <div><a href="">‧ 그린서비스센터</a></div>
            </div>
        </aside>
    </div>

    <div class="right">
        <main id="main" class="pt-4">
            <form id="cate" action="editor.php" method="post">
                <input type="hidden" name="category" id="category" value="공지사항"><br>

                <?php
                if(isset($_SESSION['id'])){
                    //로그인 후
                    echo '<h2>"', $search  , '"검색 결과</h2>';
                }
                else{
                    //로그인 전
                    echo '<h2>"', $search  , '"검색 결과</h2>';
                }
                ?>
            </form>
            <hr>
            <table class="table table-bordered table-striped">
                <colgroup>
                    <col width="12%">
                    <col width="25%">
                    <col width="*">
                    <col width="20%">
                    <col width="20%">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>카테고리</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>등록일</th>    
                    </tr>
                </thead> 
                <tbody>
            <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo <<< BBS
                        <tr id="text">
                            <td>{$row['seq']}</td>
                            <td>{$row['category']}</td>
                            <td>{$row['title']}</td>
                            <td>{$row['userid']}</td>
                            <td>{$row['reg_date']}</td>
                        </tr>
    BBS;
                    }
                } else {
                    echo <<< NOBBS
                    검색 결과가 없습니다.
    NOBBS;
                }
                $conn->close();
            ?>
                </tbody>
            </table>
        </main>
    </div>
</section><!-- /section -->