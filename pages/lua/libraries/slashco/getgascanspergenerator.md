<function name="GetGasCansPerGenerator" parent="SlashCo" type="libraryfunc">
	<description>
		Returns how many gas cans are needed to fully fuel a single generator.
		<note>
			Nothing in the codebase currently sets the value read by this function, so it always returns the default (`4`) unless another addon networks it manually.
		</note>
	</description>
	<realm>Shared</realm>
	<group>Generators</group>
	<rets>
		<ret name="amount" type="number" default="4">Number of gas cans needed per generator</ret>
	</rets>
</function>