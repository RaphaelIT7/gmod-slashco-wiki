<function name="AssembleWeightedTable" parent="SlashCo" type="libraryfunc">
	<description>
		Assembles a weighted table for use by the spawning functions.<br>
		Each element that passes the supplied conditions is added using its `Weight` value,<br>
		or a default weight of 10 when no weight is specified.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="elements" type="table<Entity>">Sequential table of entities to consider</arg>
		<arg name="conditions" type="function" default="SlashCo.DefaultConditions">
			Optional function used to determine whether each entry should be included
		</arg>
	</args>
	<rets>
		<ret name="weightedTable" type="table">Table mapping each accepted element to its weight</ret>
	</rets>
</function>