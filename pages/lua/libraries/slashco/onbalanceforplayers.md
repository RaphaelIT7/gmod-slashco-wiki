<function name="OnBalanceForPlayers" parent="SlashCo" type="libraryfunc">
	<description>
		Adjusts round spawn requirements based on the number of survivors.<br>
		Additional survivors can increase the number of generators and required documents.<br>
		Generator values are only modified when the map has not explicitly overridden them.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="totalSurvivors" type="number">Total number of survivors in the round</arg>
		<arg name="additionalSurvivors" type="number">Number of survivors above the base maximum</arg>
	</args>
</function>