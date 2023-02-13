
	</div>

	<!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!--jsPDF-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
    <!--DataTables-->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  	<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

  	<!--JavaScript-->
  	<script type="text/javascript" src="../public/scripts/scriptacesso.js"></script>
	<script type="text/javascript">
		//Script DataTables
		$(document).ready(function(){
		  $('.minhaTabela').DataTable({
		    	"language": {
		    		"url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
		        }
		    });
		});

		$(document).ready(function(){
		  $('.minhaTabelaAlunos').DataTable({
		    	"language": {
		    		"url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
		        }
		    });
		});

		//Funções dos js
		loadDocJson()
		loadDocAcesso();
		loadDocAluno();
    </script>
  </body>
</html>