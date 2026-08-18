<function name="GetWeightedRandom" parent="SlashCo" type="libraryfunc">
	<description>
		Returns a random number within the total weight of a weighted table.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="table" type="table">Weighted table containing numeric weights</arg>
	</args>
	<rets>
		<ret name="random" type="number">Random weighted value between 0 and the total weight</ret>
	</rets>
</function>