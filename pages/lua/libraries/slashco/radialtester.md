<function name="RadialTester" parent="SlashCo" type="libraryfunc">
	<description>
		Tests directions around an entity to find an unobstructed angle<br>
		If an unobstructed direction is found, its angle is returned immediately<br>
		If all tested directions are blocked, the angle with the greatest traced distance is returned<br>
	</description>
	<realm>Server</realm>
	<args>
		<arg name="ent" type="Entity">The entity from which the traces are performed.</arg>
		<arg name="dist" type="number">The distance to trace in each direction.</arg>
		<arg name="secondary" type="Entity">An additional entity to ignore when performing the traces.</arg>
	</args>
	<rets>
		<ret name="angle" type="number">The angle of the selected direction.</ret>
	</rets>
</function>