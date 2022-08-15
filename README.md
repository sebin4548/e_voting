# e_voting

# start.php를 통해 table 생성
P_Candidate, P_VOTE 테이블 생성
P_Candidate 에는 name, giho(PK), dang, gongyak, password(이후 delete, edit 시 사용), num(득표) column 생성
P_VOTE 에는 giho(PK, FK), voter_name column 생성
P_VOTE의 giho는 P_Candidate의 giho와 foreign key로 연결

# registerCandidate.html을 통해 후보자 등록
form에 있는 input을 통해 기록된 정보는 insertCandidateInfo.php로 전달

# insertCandidateInfo.php
MySQL로 후보정보(giho, dang, name, gongyak, password) insert 

# showCandidate.php를 통해 select를 통해 후보자 정보 표시

# updateCandidate.php 를 통해 정보 수정
form에 있는 input를 통해 정보를 수정할 수 있도록 하였고, 이 수정한 정보는 sqlEditCandidate.php를 통해 전달.

# sqlEditCandidate.php 
MySQL로 정보 Update

# vote.php
Table과 Form을 통해 후보자의 정보를 표시하고, radio 버튼을 통해 선택하고 이 정보를 sqlVote.php로 전달한다.

# sqlVote.php
먼저 P_Candidate에 있는 num column의 정보를 update
그리고 P_VOTE에 유권자 정보를 Insert

# result.php
P_Candidate Table에 있는 후보자 정보와 득표수를 MySQL에 기록된 정보를 바탕으로 기록한다.

아래에는 P_VOTE Table에 기록된 후보자와 투표자 개인의 이름을 기록한다. 