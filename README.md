# e_voting

# start.php를 통해 table 생성
P_Candidate, P_VOTE 테이블 생성
P_Candidate 에는 name, giho(PK), dang, gongyak, password(이후 delete, edit 시 사용) column 생성
P_VOTE 에는 giho(PK, FK), voter_name column 생성
P_VOTE의 giho는 P_Candidate의 giho와 foreign key로 연결

# registerCandidate.html을 통해 후보자 등록
form에 있는 input을 통해 기록된 정보는 insertCandidateInfo.php로 전달

# insertCandidateInfo.php를 통해 MySQL로 후보정보 insert 

# showCandidate.php를 통해 select를 통해 후보자 정보 표시

# updateCandidate.php 를 통해 정보 수정
form에 있는 input를 통해 정보를 수정할 수 있도록 하였고, 이 수정한 정보는 sqlEditCandidate.php를 통해 전달.

# sqlEditCandidate.php 를 통해 MySQL로 정보 수정
