	</div>
		<!--Fim Container Body-->

	<!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!--jsPDF-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
    <!--DataTables-->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  	<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  	<!--Página de scripts.js-->
  	<script type="text/javascript" src="./public/scripts/script.js"></script>

  	<!--Scripts de funções js-->
    <script>
    	function gerarPdf(){
    		var doc = new jsPDF()

			doc.fromHTML('<table> <thead> <tr> <th>Matrícula</th> <th> Nome </th> </tr> </thead> <tbody> <?php foreach ($jsondataAluno as $aluno): ?>
				    	<tr> <td><?= $aluno['matricula'];?></td> <td><?= $aluno['nome'];?></td>	</tr> <?php endforeach ?>
				  </tbody> </table>', 30)
			doc.save('Lista de alunos.pdf')
    	}

    	$(document).ready(function(){
		  $('.minhaTabela').DataTable({
		    	"language": {
		    		"url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
		        }
		    });
		});
    </script>
  </body>
</html>