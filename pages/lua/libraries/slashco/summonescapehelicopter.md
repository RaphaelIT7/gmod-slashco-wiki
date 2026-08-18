<function name="SummonEscapeHelicopter" parent="SlashCo" type="libraryfunc">
	<description>
		Summons the rescue helicopter for the current round<br>
		If the helicopter has already been summoned, this returns true
	</description>
	<realm>Server</realm>
	<args>
		<arg name="distress" type="boolean">Whether the helicopter was summoned using the distress beacon</arg>
	</args>
	<rets>
		<ret name="alreadySummoned" type="boolean">Returns true if the escape helicopter had already been summoned</ret>
	</rets>
</function>